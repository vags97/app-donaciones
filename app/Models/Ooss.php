<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ooss extends Model
{
    use HasFactory;

    protected $table = 'ooss';

    protected $fillable = [
        'nombre',
        'comuna_id',
        'direccion',
        'donaciones_monetarias',
        'donaciones_monetarias_detalle',
        'email',
        'telefono',
        'facebook',
        'instagram',
        'whatsapp',
        'imagen_perfil'
    ];
}
