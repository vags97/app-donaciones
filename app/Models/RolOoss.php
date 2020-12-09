<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolOoss extends Model
{
    use HasFactory;

    protected $table = 'roles_ooss';

    protected $fillable = [
        'nombre'
    ];
}
