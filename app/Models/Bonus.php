<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    use HasFactory;

    protected $table = "bonuses";
    protected $primaryKey = "id";
    protected $fillable = [
        'bonus_name',
        'remarks_bonus',
        'created_at',
        'updated_at',
    ];
}
