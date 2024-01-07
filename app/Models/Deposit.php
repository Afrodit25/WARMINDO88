<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $table = "deposits";
    protected $primaryKey = "id";
    protected $fillable = [
        'berita_deposit',
        'nominal_deposit',
        'saldo_deposit',
        'status_deposit',
        'img_bukti_pembayaran',
        'remarks_deposit',
        'created_at',
        'updated_at',
        'bank_account_id',
        'bank_account_pemilik_id',
        'member_id',
        'user_id',
        'bonus_id',
    ];
}
