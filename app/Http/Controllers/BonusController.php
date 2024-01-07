<?php

namespace App\Http\Controllers;

use App\Models\Bonus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class BonusController extends Controller
{
    public function index()
    {
        $bonus = Bonus::all();
        return view('bonus.view', compact('bonus'));
    }

    public function json()
    {

        $bonus = Bonus::orderBy('updated_at', 'desc')->get();

        return DataTables::of($bonus)
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
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_bonus' . $data->id . '"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" onclick="deleteData(`' . route('Bonus.delete', $data->id) . '`)"><i class="fa fa-trash m-r-5"></i> Hapus</a>
                        </div>
                </div>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Bonus::create([
                'bonus_name'        => $request->bonus_name,
                'remarks_bonus'     => $request->remarks_bonus,
            ]);
            DB::commit();
            return redirect('Bonus')->with(['success' => 'Data Bonus berhasil di tambah !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Update Data Bonus
            $dataBonus = [
                'bonus_name'        => $request->bonus_name,
                'remarks_bonus'     => $request->remarks_bonus,
            ];
            Bonus::find($id)->update($dataBonus);

            DB::commit();
            return redirect('Bonus')->with(['success' => 'Data Bonus berhasil di Update !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function delete($id)
    {
        $bonus = Bonus::find($id);

        $del = $bonus->delete();
            return response()->json([
            // "berhasil" => "Data Asset berhasil ditemukan",
        ]);
    }
}
