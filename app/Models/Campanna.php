<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campanna extends Model
{
    use HasFactory;

    protected $table = 'campannas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'donacion_monetaria_meta',
        'donacion_monetaria_recaudada'
    ];
}
