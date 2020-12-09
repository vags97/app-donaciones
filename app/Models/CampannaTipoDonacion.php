<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampannaTipoDonacion extends Model
{
    use HasFactory;

    protected $table = 'campanna_tipo_donacion';

    protected $fillable = [
        'tipo_donacion_id',
        'campanna_id',
    ];

}
