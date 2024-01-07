<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccountPemilik extends Model
{
    use HasFactory;

    protected $table = "bank_account_pemiliks";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_rekening_bank_account_pemilik',
        'no_rekening_bank_account_pemilik',
        'min_depo',
        'max_depo',
        'type_bank_account_pemilik',
        'remarks_bank_account_pemilik',
        'created_at',
        'updated_at',
        'bank_id',
    ];
}
