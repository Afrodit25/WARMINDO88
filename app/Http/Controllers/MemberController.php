<?php

namespace App\Http\Controllers;

use App\Models\HistoryMember;
use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class MemberController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $member = Member::orderBy('updated_at', 'desc');

            // Tambahkan filter sesuai kebutuhan
            if ($request->username_filter != '') {
                $member->where('username_member', 'like', '%' . $request->username_filter . '%');
            }
            if ($request->fullname_filter != '') {
                $member->where('full_name_member', 'like', '%' . $request->fullname_filter . '%');
            }
            // if ($request->has('category')) {
            //     $member->where('category', $request->category);
            // }

            $query = $member->get();

            return DataTables::of($query)
                ->addColumn('created_at', function ($data) {
                    return Carbon::parse($data->created_at)->format('d M Y H:i:s');
                })
                ->addColumn('updated_at', function ($data) {
                    return Carbon::parse($data->updated_at)->format('d M Y H:i:s');
                })
                ->addColumn('user_id', function ($data) {
                    return $data->user_id;
                })
                ->addColumn('saldo_deposit', function ($data) {
                    return rupiah($data->saldo_deposit);
                })
                ->addColumn('action', function ($data) {
                    return '
                    <div class="dropdown dropdown-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_saldo' . $data->id . '"><i class="fa fa-money m-r-5"></i> Edit Saldo</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#change_password' . $data->id . '"><i class="fa fa-key m-r-5"></i> Change Password</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#reset_password' . $data->id . '"><i class="fa fa-undo m-r-5"></i> Reset Password</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_member' . $data->id . '"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                </div>
                                </div>
                    ';
                        // <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteData' . $data->id . '"><i class="fa fa-trash m-r-5"></i> Hapus</a>
                        // <a href="#" class="edit btn btn-xs btn-info btn-flat btn-sm editAsset" data-toggle="modal" data-target="#edit_employee' . $data->id . '"><i class="fa fa-pencil"></i></a>
                        // <button type="button" onclick="deleteData(`' . route('department.delete', $data->id) . '`)" class="btn btn-xs btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $member = Member::all();

        return view('member.view', compact('member'));
    }

    public function EditSaldo(Request $request, $id)
    {
        $data=DB::table('members')->where('id', $request->member_id)->first();
        // return $data;

        DB::beginTransaction();
        try {
            // History Deposit
            HistoryMember::create([
                'type'                  => 'Edit Saldo Member',
                'saldo_sebelumnya'      => $request->saldo_sebelumnya,
                'saldo_update'          => $request->saldo_deposit,
                'website_ref'           => 'WARMINDO88',
                'remarks'               => '-',
                'member_id'             => $request->member_id,
                'user_update'           => $userid = auth()->user()->name,
            ]);

            // Update Member
            $dataMember = [
                'saldo_deposit'        => $request->saldo_deposit,
            ];
            Member::find($request->member_id)->update($dataMember);


            DB::commit();
            Alert::success('Success', 'Saldo Deposit member telah diupdate');
            return redirect('Member')->with(['success' => 'Saldo Deposit berhasil di Update !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function EditMember(Request $request, $id)
    {
        $data=DB::table('members')->where('id', $request->member_id)->first();
        // return $data;

        DB::beginTransaction();
        try {
            // History Deposit
            HistoryMember::create([
                'type'                  => 'Edit Saldo Member',
                'saldo_sebelumnya'      => $request->saldo_sebelumnya,
                'saldo_update'          => $request->saldo_deposit,
                'website_ref'           => 'WARMINDO88',
                'remarks'               => '-',
                'member_id'             => $request->member_id,
                'user_update'           => $userid = auth()->user()->name,
            ]);

            // Update Member
            $dataMember = [
                'full_name_member'     => $request->full_name_member,
                'kode_refferal'        => $request->kode_refferal,
                'saldo_deposit'        => $request->saldo_deposit,
            ];
            Member::find($request->member_id)->update($dataMember);


            DB::commit();
            Alert::success('Success', 'Data member berhasil diupdate');
            return redirect('Member')->with(['success' => 'Data member berhasil diupdate !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function ChangePassword(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            // Change Password User
            $user = User::find($request->user_id);
            $user->update([
                'password' => Hash::make($request->password),
            ]);

            DB::commit();
            Alert::success('Success', 'Password Updated Successfully !');
            return redirect('Member')->with(['success' => 'Password Updated Successfully !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

}
