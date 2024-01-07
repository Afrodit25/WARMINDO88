<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = "karyawans";
    protected $primaryKey = "id";
    protected $fillable = [
        'username_kary',
        'full_name_kary',
        'email_kary',
        'jabatan_kary',
        'tlp_kary',
        'alamat_kary',
        'remarks_kary',
        'kode_refferal',
        'user_id',
    ];
}
