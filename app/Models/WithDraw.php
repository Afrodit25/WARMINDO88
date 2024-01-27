<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithDraw extends Model
{
    use HasFactory;

    protected $table = "with_draws";
    protected $primaryKey = "id";
    protected $fillable = [
        'berita_withdraw',
        'nominal_withdraw',
        'status_withdraw',
        'remarks_withdraw',
        'member_id',
        'user_id',
        'bank_account_id',
        'updateBy',
    ];
}
