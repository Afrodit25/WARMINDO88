<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryDeposit extends Model
{
    use HasFactory;

    protected $table = "history_deposits";
    protected $primaryKey = "id";
    protected $fillable = [
        'type',
        'saldo_sebelumnya',
        'saldo_update',
        'status_deposit',
        'website_ref',
        'remarks',
        'deposit_id',
        'user_update',
    ];
}
