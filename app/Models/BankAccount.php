<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $table = "bank_accounts";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_rekening',
        'no_rekening',
        'type_bank_accounts',
        'remarks_bank_accounts',
        'created_at',
        'updated_at',
        'bank_id',
        'member_id',
    ];
}
