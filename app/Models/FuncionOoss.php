<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuncionOoss extends Model
{
    use HasFactory;

    protected $table = 'funciones_ooss';

    protected $fillable = [
        'nombre',
        'enlace'
    ];
}
