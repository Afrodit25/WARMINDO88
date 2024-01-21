<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\HistoryDeposit;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class DepositController extends Controller
{
    public function index()
    {
        $deposit = Deposit::all();
        return view('deposit.view', compact('deposit'));
    }

    public function json()
    {
        $userid = auth()->user()->id;
        $Depo = DB::table('deposits')
            ->join('members', 'members.id', '=', 'deposits.member_id')
            ->join('bank_account_pemiliks', 'bank_account_pemiliks.id', '=', 'deposits.bank_account_pemilik_id')
            ->join('banks', 'banks.id', '=', 'bank_account_pemiliks.bank_id')
            ->select('deposits.*','members.username_member','banks.bank_name','banks.bank_type','bank_account_pemiliks.nama_rekening_bank_account_pemilik','bank_account_pemiliks.no_rekening_bank_account_pemilik')
            // ->where('members.user_id', $userid)
            ->orderByDesc('deposits.updated_at')
            ->get();

        return DataTables::of($Depo)
            ->addColumn('created_at', function ($data) {
                return Carbon::parse($data->created_at)->format('d M Y H:i:s');
            })
            ->addColumn('updated_at', function ($data) {
                return Carbon::parse($data->updated_at)->format('d M Y H:i:s');
            })
            ->addColumn('nominal_deposit', function ($data) {
                return rupiah($data->nominal_deposit);
            })
            ->addColumn('saldo_deposit', function ($data) {
                return rupiah($data->saldo_deposit);
            })
            ->editColumn('status_deposit', function ($edit_status) {

                if ($edit_status->status_deposit == 'PENDING') {
                    return '<span class="badge bg-inverse-danger">PENDING</span>';
                } elseif ($edit_status->status_deposit == 'SUCCESS') {
                    return '<span class="badge bg-inverse-success">SUCCESS</span>';
                }
            })
            ->addColumn('action', function ($data) {
                if($data->status_deposit != 'SUCCESS'){
                    return '
                    <div class="dropdown dropdown-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#update_status' . $data->id . '"><i class="fa fa-pencil-square-o m-r-5"></i> Update Status</a>
                                <a class="dropdown-item" href="#" onclick="deleteData(`' . route('Deposit.delete', $data->id) . '`)"><i class="fa fa-trash m-r-5"></i> Hapus</a>
                            </div>
                    </div>
                    ';
                }
                else {
                    return '
                    <div class="dropdown dropdown-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#update_status' . $data->id . '"><i class="fa fa-pencil-square-o m-r-5"></i> Update Status</a>
                            </div>
                    </div>
                    ';
                }
            })
            ->rawColumns(['action','status_deposit'])
            ->make(true);
    }

    public function UpdateStatus(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            // History Deposit
            HistoryDeposit::create([
                'type'                  => 'Update Status Deposit',
                'saldo_sebelumnya'      => $request->saldo_sebelumnya,
                'saldo_update'          => $request->saldo_sebelumnya,
                'status_deposit'        => $request->status_deposit,
                'website_ref'           => 'WARMINDO88',
                'remarks'               => '-',
                'deposit_id'            => $request->deposit_id,
                'user_update'           => $userid = auth()->user()->name,
            ]);

            // Update Status Deposit
            $dataDeposit = [
                'status_deposit'        => $request->status_deposit,
            ];
            Deposit::find($id)->update($dataDeposit);

            // Update Status Deposit
            $member = Member::where('id', $request->member_id)->first();
            $saldo_sebelum = $member->saldo_deposit;
            $dataMember = [
                'saldo_deposit'        => $saldo_sebelum + $request->saldo_sebelumnya,
            ];
            Member::find($member->id)->update($dataMember);

            DB::commit();
            return redirect('Deposit')->with(['success' => 'Data Status Deposit berhasil di Update !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    // public function EditSaldo(Request $request, $id)
    // {
    //     Alert::error('Error Title', 'Error Message');
    //     return redirect()->back();

    //     $data=DB::table('deposits')->where('member_id','=',$request->member_id)->sum('nominal_deposit');
    //     return $data;

    //     DB::beginTransaction();
    //     try {
    //         // History Deposit
    //         HistoryDeposit::create([
    //             'type'                  => 'Edit Saldo Deposit',
    //             'saldo_sebelumnya'      => $request->saldo_sebelumnya,
    //             'saldo_update'          => $request->saldo_sebelumnya,
    //             'status_deposit'        => $request->status_deposit,
    //             'website_ref'           => 'WARMINDO88',
    //             'remarks'               => '-',
    //             'deposit_id'            => $request->deposit_id,
    //             'user_update'           => $userid = auth()->user()->name,
    //         ]);

    //         // Update Status Deposit
    //         $dataDeposit = [
    //             'nominal_deposit'      => $request->nominal_deposit,
    //             'saldo_deposit'        => $request->saldo_deposit,
    //         ];
    //         Deposit::find($id)->update($dataDeposit);

    //         // Update Status Deposit
    //         $member = Member::where('id', $request->member_id)->first();
    //         $saldo_sebelum = $member->saldo_deposit;
    //         $dataMember = [
    //             'saldo_deposit'        => $saldo_sebelum + $request->saldo_sebelumnya,
    //         ];
    //         Member::find($member->id)->update($dataMember);

    //         DB::commit();
    //         return redirect('Deposit')->with(['success' => 'Data Status Deposit berhasil di Update !']);
    //     } catch (\Throwable $th) {
    //         DB::rollBack();
    //         throw $th;
    //     }
    // }

    public function delete($id)
    {
        $deposit = Deposit::where('id', $id)->first();
        DB::beginTransaction();
        try {
            // History Deposit
            HistoryDeposit::create([
                'type'                  => 'Hapus Data Deposit',
                'saldo_sebelumnya'      => $deposit->nominal_deposit,
                'saldo_update'          => $deposit->nominal_deposit,
                'status_deposit'        => $deposit->status_deposit,
                'website_ref'           => 'WARMINDO88',
                'remarks'               => '-',
                'deposit_id'            => $id,
                'user_update'           => $userid = auth()->user()->name,
            ]);

            // Delete Deposit
            $deposit = Deposit::find($id);
            $deposit->delete();


            DB::commit();
            return response()->json([
                "berhasil" => "Data Asset berhasil di Hapus !",
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
