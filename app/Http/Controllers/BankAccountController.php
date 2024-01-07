<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankAccountController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            BankAccount::create([
                'nama_rekening'         => $request->optAccountNames,
                'no_rekening'           => $request->optAccountNumbers,
                'type_bank_accounts'    => 'member',
                'bank_id'               => $request->chooseOptionalBank,
                'member_id'             => $request->member_id,
            ]);
            DB::commit();
            return redirect()->back()->with(['success' => 'Data Bank Account berhasil di tambah !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
