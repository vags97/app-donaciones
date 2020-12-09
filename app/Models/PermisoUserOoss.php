<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermisoUserOoss extends Model
{
    use HasFactory;

    protected $table = 'permisos_user_ooss';

    protected $fillable = [
        'funcion_os_id',
        'user_id',
        'os_id',
        'ver',
        'crear',
        'editar',
        'eliminar'
    ];
}
