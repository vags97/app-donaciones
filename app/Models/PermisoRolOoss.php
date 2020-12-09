<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermisoRolOoss extends Model
{
    use HasFactory;

    protected $table = [
        'funcion_os_id',
        'rol_os_id',
        'ver',
        'crear',
        'editar',
        'eliminar',
    ];
}
