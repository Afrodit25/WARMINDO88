<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BankAccount;
use App\Models\Bonus;
use App\Models\Deposit;
use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class Warmindo88MobileController extends Controller
{
    public function userCheck(Request $request)
    {
        $usernameCheck = User::where('username', $request->username)->get();
        if ($usernameCheck) {
            return response()->json([
                "status" => false,
                "errors" => ["Username already exist"]
            ]);
        }
    }

    public function index_mobile()
    {
        if (auth()->user()) {
            return $this->home();
        }
        return view('website.warmindo88.mobile.auth.index');
    }

    public function doLoginwithUsername(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Error Title', 'Error Message');
            return redirect()->back();
        } else {
            if (Auth::attempt($request->only(["username", "password"]))) {
                Alert::success('Success', 'Berhasil Login !!!');
                return redirect('Home');
            } else {
                Alert::error('Error', 'Invalid credentials');
                return redirect()->back();
            }
        }
    }

    public function daftar()
    {
        $bank = Bank::all();
        $bankGroup = $bank->groupBy('bank_type');
        return view('website.warmindo88.mobile.auth.daftar', compact('bank', 'bankGroup'));
    }

    public function daftar_save(Request $request)
    {
        DB::beginTransaction();
        try {
            $this->validate($request, [
                'username' => 'required|unique:roles,name',
                'password' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'bank' => 'required',
                'accName' => '',
                'accNumber' => '',
            ]);

            $UserSave = User::create([
                'username' => $request->input('username'),
                'name' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
            $UserSave->assignRole('member');
            $lastInsertid_User = $UserSave->id;

            $MemberSave = Member::create([
                'username_member'   => $request->input('username'),
                'full_name_member'  => $request->input('username'),
                'email_member'      => $request->input('email'),
                'tlp_member'        => $request->input('phone'),
                'website_ref'       => 'Warmindo88',
                'saldo_deposit'     => 0,
                'remarks_member'    => '',
                'user_id'           => $lastInsertid_User,
            ]);
            $lastInsertid_Member = $MemberSave->id;

            $BankAccountSave = BankAccount::create([
                'nama_rekening'         => $request->input('accName'),
                'no_rekening'           => $request->input('accNumber'),
                'type_bank_accounts'    => 'Member',
                'bank_id'               => $request->input('bank'),
                'member_id'             => $lastInsertid_Member,
            ]);
            $lastInsertid_BankAccount = $BankAccountSave->id;


            DB::commit();
            Alert::success('Success', 'Registration Successfull !');
            return redirect()->back()->with(['success' => 'Data "' . $request->input('username') . '" berhasil di tambah ! Silahkan Login ']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function lupa_sandi()
    {
        return view('website.warmindo88.mobile.auth.lupa_sandi');
    }

    public function promo()
    {
        return view('website.warmindo88.mobile.auth.promo');
    }

    public function home()
    {
        $member = Member::where('user_id', auth()->user()->id)->first();
        return view('website.warmindo88.mobile.widget.index', compact('member'));
    }

    public function deposit(Request $request)
    {
        $userid = auth()->user()->id;

        $data = DB::table('users')
            ->join('members', 'members.user_id', '=', 'users.id')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->where('users.id', $userid)
            ->get();

        $bank = Bank::all();
        $bankGroup = $bank->groupBy('bank_type');

        $bonus = Bonus::all();

        $bankUtama = DB::table('members')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->select('bank_accounts.id', 'bank_accounts.no_rekening', 'bank_accounts.nama_rekening', 'banks.bank_name')
            ->where('user_id', $userid)
            ->orderByDesc('bank_accounts.updated_at')
            // ->limit(1)
            ->get();

        $bankOwner = DB::table('bank_account_pemiliks')
            ->join('banks', 'bank_account_pemiliks.bank_id', '=', 'banks.id')
            ->select('bank_account_pemiliks.*', 'banks.bank_name', 'banks.bank_type')
            // ->where('bank_account_pemiliks.bank_id', $userid)
            ->get();

        $member = Member::where('user_id', auth()->user()->id)->first();



        return view('website.warmindo88.mobile.widget.deposit', compact('data', 'bonus', 'bankOwner', 'bank', 'bankGroup', 'bankUtama', 'member'));
    }

    public function deposit_json(Request $request)
    {
        $userid = auth()->user()->id;
        if ($request->ajax()) {
            $member = DB::table('deposits')
            ->where('user_id', $userid);

            // if ($request->filled('from_date') && $request->filled('to_date')) {
            //     $query = $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
            // }

            $query = $member->get();

            return DataTables::of($query)
            ->addColumn('tanggal', function ($data) {
                return Carbon::parse($data->created_at)->format('d M Y H:i:s');
            })
            ->addColumn('nominal_deposit', function ($data) {
                return rupiah($data->nominal_deposit);
            })
            ->addColumn('status_deposit', function ($data) {
                return $data->status_deposit;
            })
            ->rawColumns(['nominal_deposit'])
            ->make(true);
        }
    }

    public function deposit_save(Request $request)
    {
        $userid = auth()->user()->id;
        $member_id = DB::table('members')->where('user_id', $userid)->first();
        DB::beginTransaction();
        try {
            $this->validate($request, [
                'bankMember' => 'required',
                'bankOwner' => '',
                'bonus_id' => '',
                'amount' => '',
                'notes' => '',
                // 'img_bukti_payment' => 'required|image|file|max:1024',
                'img_bukti_payment' => 'required',
            ]);

            $amount = $request->input('amount') * 1000;

            $saldo_deposit = Deposit::where('member_id', $member_id->id)->sum('nominal_deposit');

            $member = Member::find($member_id->id);
            // $member->update([
            //     'saldo_deposit' => $saldo_deposit + $amount,
            // ]);

            $DepositSave = Deposit::create([
                'berita_deposit' => '-',
                'nominal_deposit' => $amount,
                'saldo_deposit' => $saldo_deposit + $amount,
                'status_deposit' => 'PENDING',
                'img_bukti_pembayaran' => $request->file('img_bukti_payment')->store('WARMINDO88/Bukti-Pembayaran'),
                'remarks_deposit' => $request->input('notes'),
                'bank_account_id' => $request->input('bankMember'),
                'bank_account_pemilik_id' => $request->input('bankOwner'),
                'member_id' => $member_id->id,
                'user_id' => $userid,
                'bonus_id' => $request->input('bonus_id'),
            ]);
            $lastInsertid_Deposit = $DepositSave->id;


            DB::commit();
            Alert::success('Success', 'Anda berhasil melakukan deposit sebesar '.rupiah($amount).' !');
            return redirect()->back()->with(['success' => 'Anda berhasil melakukan deposit sebesar '.rupiah($amount).' !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
            // return redirect('apps/tambah_dana')->with(['error' => 'Data Deposit gagal di tambahkan !']);
        }
    }

    public function withdraw()
    {
        $member = Member::where('user_id', auth()->user()->id)->first();
        return view('website.warmindo88.mobile.widget.withdraw', compact('member'));
    }

    public function withdraw_json(Request $request)
    {
        $userid = auth()->user()->id;
        if ($request->ajax()) {
            $withdraw = DB::table('with_draws')
            ->where('user_id', $userid);

            // if ($request->filled('from_date') && $request->filled('to_date')) {
            //     $query = $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
            // }

            $query = $withdraw->get();

            return DataTables::of($query)
            ->addColumn('tanggal', function ($data) {
                return Carbon::parse($data->created_at)->format('d M Y H:i:s');
            })
            ->addColumn('nominal_withdraw', function ($data) {
                return rupiah($data->nominal_withdraw);
            })
            ->addColumn('status_withdraw', function ($data) {
                return $data->status_withdraw;
            })
            ->rawColumns(['nominal_withdraw'])
            ->make(true);
        }
    }

    public function promosi()
    {
        return view('website.warmindo88.mobile.widget.promosi');
    }

    public function bonus()
    {
        return view('website.warmindo88.mobile.widget.bonus');
    }

    public function memo()
    {
        return view('website.warmindo88.mobile.widget.memo');
    }

    public function profile()
    {
        return view('website.warmindo88.mobile.widget.profile');
    }

    public function feedback()
    {
        return view('website.warmindo88.mobile.widget.feedback');
    }

    public function help()
    {
        return view('website.warmindo88.mobile.widget.help');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Alert::success('Success', 'Anda berhasil Logout !');
        return redirect('/');
    }
}
