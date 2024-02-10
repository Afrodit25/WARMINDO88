<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BankAccount;
use App\Models\Bonus;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class Warmindo88MobileController extends Controller
{
    public function userCheck(Request $request)
    {
        $usernameCheck = User::where('username', $request->username)->get();
        if($usernameCheck){
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

        if ($validator->fails()){
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
        return view('website.warmindo88.mobile.auth.daftar', compact('bank','bankGroup'));
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
        return view('website.warmindo88.mobile.widget.index');
    }

    public function deposit()
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
            ->select('bank_accounts.id','bank_accounts.no_rekening','bank_accounts.nama_rekening','banks.bank_name')
            ->where('user_id', $userid)
            ->orderByDesc('bank_accounts.updated_at')
            // ->limit(1)
            ->get();

        $bankOwner = DB::table('bank_account_pemiliks')
            ->join('banks', 'bank_account_pemiliks.bank_id', '=', 'banks.id')
            ->select('bank_account_pemiliks.*','banks.bank_name','banks.bank_type')
            // ->where('bank_account_pemiliks.bank_id', $userid)
            ->get();

        $saldoMember = Member::where('user_id', $userid)->first();

        return view('website.warmindo88.mobile.widget.deposit', compact('data','bonus','bankOwner','bank','bankGroup','bankUtama','saldoMember'));
    }

    public function withdraw()
    {
        return view('website.warmindo88.mobile.widget.withdraw');
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

        return redirect('/');
    }


}
