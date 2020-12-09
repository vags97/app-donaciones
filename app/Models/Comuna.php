<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;

    protected $table = 'comunas';

    protected $fillable = [
        'provinica_id',
        'nombre_largo',
        'nombre_corto'
    ];
}
