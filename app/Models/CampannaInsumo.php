<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampannaInsumo extends Model
{
    use HasFactory;

    protected $table = 'campanna_insumos';

    protected $fillable = [
        'campanna_id',
        'nombre',
        'meta',
        'recaudado',
        'unidad_medida_id',
    ];
}
