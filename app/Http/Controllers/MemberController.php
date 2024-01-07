<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MemberController extends Controller
{
    public function index()
    {
        return view('member.view');
    }

    public function json()
    {

        $member = Member::orderBy('updated_at', 'desc')->get();

        return DataTables::of($member)
            ->addColumn('created_at', function ($data) {
                return Carbon::parse($data->created_at)->format('d M Y H:i:s');
            })
            ->addColumn('updated_at', function ($data) {
                return Carbon::parse($data->updated_at)->format('d M Y H:i:s');
            })
            ->addColumn('user_id', function ($data) {
                return $data->user_id;
            })
            ->addColumn('action', function ($data) {
                return '
                <div class="dropdown dropdown-action">
					<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_member' . $data->id . '"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteData' . $data->id . '"><i class="fa fa-trash m-r-5"></i> Hapus</a>
                        </div>
                </div>
                ';
                    // <a href="#" class="edit btn btn-xs btn-info btn-flat btn-sm editAsset" data-toggle="modal" data-target="#edit_employee' . $data->id . '"><i class="fa fa-pencil"></i></a>
                    // <button type="button" onclick="deleteData(`' . route('department.delete', $data->id) . '`)" class="btn btn-xs btn-danger btn-sm"><i class="fa fa-trash"></i></button>
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
