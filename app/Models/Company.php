<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = "companies";
    protected $primaryKey = "id";
    protected $fillable = [
        'company',
        'company_name',
        'company_email',
        'company_phone',
        'company_business',
        'company_remarks',
        'created_at',
        'updated_at',
    ];
}
