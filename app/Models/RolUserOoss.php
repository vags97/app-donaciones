<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolUserOoss extends Model
{
    use HasFactory;

    protected $table = 'tol_iser_ooss';

    protected $fillable = [
        'rol_os_id',
        'user_id',
        'os_id'
    ];
}
