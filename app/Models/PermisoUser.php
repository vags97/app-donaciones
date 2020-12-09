<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermisoUser extends Model
{
    use HasFactory;

    protected $table = 'permisos_user';

    protected $fillable = [
        'funcion_id',
        'user_id',
        'os_id',
        'ver',
        'crear',
        'editar',
        'eliminar'
    ];
}
