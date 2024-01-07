<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = "members";
    protected $primaryKey = "id";
    protected $fillable = [
        'username_member',
        'full_name_member',
        'email_member',
        'tlp_member',
        'website_ref',
        'saldo_deposit',
        'remarks_member',
        'kode_refferal',
        'created_at',
        'updated_at',
        'user_id',
    ];
}
