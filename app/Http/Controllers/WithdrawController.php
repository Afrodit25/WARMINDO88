<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\WithDraw;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class WithdrawController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = DB::table('with_draws')
            ->join('members', 'members.id', '=', 'with_draws.member_id')
            ->join('bank_accounts', 'bank_accounts.id', '=', 'with_draws.bank_account_id')
            ->join('banks', 'banks.id', '=', 'bank_accounts.bank_id')
            ->select('with_draws.*','members.username_member','banks.bank_name','banks.bank_type','bank_accounts.nama_rekening','bank_accounts.no_rekening')
            ;

            // Tambahkan filter sesuai kebutuhan
            // if ($request->has('name')) {
            //     $query->where('products.name', 'like', '%' . $request->name . '%');
            // }

            // if ($request->has('category')) {
            //     $query->where('categories.name', $request->category);
            // }

            // Tambahkan pengurutan descending berdasarkan kolom tertentu
            $query->orderByDesc('with_draws.updated_at');

            $data = $query->get();

            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    if($row->status_withdraw != 'SUCCESS'){
                        return '
                        <div class="dropdown dropdown-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#update_status' . $row->id . '"><i class="fa fa-pencil-square-o m-r-5"></i> Update Status</a>
                                    <a class="dropdown-item" href="#" onclick="deleteData(`' . route('Deposit.delete', $row->id) . '`)"><i class="fa fa-trash m-r-5"></i> Hapus</a>
                                </div>
                        </div>
                        ';
                    }
                    else {
                        return '
                        ';
                    }
                })
                ->addColumn('nominal_withdraw', function ($row) {
                    return rupiah($row->nominal_withdraw);
                })
                ->addColumn('username_member', function ($row) {
                    return $row->username_member;
                })
                ->addColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->format('d M Y H:i:s');
                })

                ->rawColumns(['action','status_withdraw'])
                ->make(true);
        }
        $withdraw = WithDraw::all();
        return view('withdraw.view', compact('withdraw'));
    }

    public function UpdateStatus(Request $request, $id)
    {
        $member = Member::where('id', $request->member_id)->first();
        $saldo_member = $member->saldo_deposit;
        DB::beginTransaction();
        try {
            // // History Deposit
            // HistoryDeposit::create([
            //     'type'                  => 'Update Status Deposit',
            //     'saldo_sebelumnya'      => $request->saldo_sebelumnya,
            //     'saldo_update'          => $request->saldo_sebelumnya,
            //     'status_deposit'        => $request->status_deposit,
            //     'website_ref'           => 'WARMINDO88',
            //     'remarks'               => '-',
            //     'deposit_id'            => $request->deposit_id,
            //     'user_update'           => $userid = auth()->user()->name,
            // ]);

            if($request->saldo_sebelumnya > $saldo_member)
            {
                Alert::error('Error', 'Withdraw tidak boleh melebihi dari sisa saldo member !!');
                return redirect()->back();
            }

            // Update Status Deposit
            $dataWithdraw = [
                'status_withdraw'        => $request->status_withdraw,
            ];
            WithDraw::find($id)->update($dataWithdraw);

            // Update Saldo Member
            $dataMember = [
                'saldo_deposit'        => $saldo_member - $request->nominal_withdraw,
            ];
            Member::find($member->id)->update($dataMember);

            DB::commit();
            return redirect('Withdraw')->with(['success' => 'Data Status Withdraw berhasil di Update !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
