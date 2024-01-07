<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryMember extends Model
{
    use HasFactory;

    protected $table = "history_members";
    protected $primaryKey = "id";
    protected $fillable = [
        'type',
        'saldo_sebelumnya',
        'saldo_update',
        'website_ref',
        'remarks',
        'member_id',
        'user_update',
    ];
}
