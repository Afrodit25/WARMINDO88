<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:tambah-user|edit-user|hapus-user|lihat-user', ['only' => ['index','show']]);
         $this->middleware('permission:tambah-user', ['only' => ['create','store']]);
         $this->middleware('permission:edit-user', ['only' => ['edit','update']]);
         $this->middleware('permission:hapus-user', ['only' => ['destroy']]);
    }

    public function index()
    {
        $user = User::all();
        return view('user.view', compact('user'));
        // return 'Home User Index';
    }

    public function json()
    {

        $user = User::orderBy('updated_at', 'desc')->get();

        // return Datatables::of(User::all())
        return DataTables::of($user)
            ->editColumn('name', function ($edit_name) {
                return '
                <h2 class="table-avatar">
                    <a href="" class="avatar"><img src="assets/img/people.png" alt=""></a>
                    <a href="">' . $edit_name->name . ' <span> ' . $edit_name->email . '</span></a>
                </h2>
            ';
            })
            ->addColumn('password', function ($data) {
                return password_hash($data->password, PASSWORD_DEFAULT);
                // return Crypt::decrypt($data->password);
            })
            ->addColumn('created_at', function ($data) {
                return Carbon::parse($data->created_at)->format('d M Y H:i:s');
            })
            ->addColumn('updated_at', function ($data) {
                return Carbon::parse($data->updated_at)->format('d M Y H:i:s');
            })
            ->addColumn('action', function ($data) {
                return '
                <div class="dropdown dropdown-action">
					<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Edit_user' . $data->id . '"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#change_password' . $data->id . '"><i class="fa fa-key m-r-5"></i> Change Password</a>
                        </div>
                </div>
                            ';
                // <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_department"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
            })
            ->rawColumns(['action', 'name','password'])
            ->make(true);
    }

    public function create()
    {
        return 'Create User';
    }

    public function edit()
    {
        return 'Edit User';
    }

    public function destroy()
    {
        return 'Hapus User';
    }

    public function changePassword(Request $request, $id)
    {
        try {
            // Change Password User
            $user = User::find($id);
            $user->update([
                'password' => Hash::make($request->password),
            ]);

            DB::commit();
            return redirect('Users')->with(['success' => 'Password Updated Successfully !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
