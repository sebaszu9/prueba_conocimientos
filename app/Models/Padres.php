<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padres extends Model
{
    use HasFactory;

    protected $table='padres';

    protected $fillable = [
        'nombres',
        'apellidos',
        'edad',
        'fecha_nacimiento'
    ];
}
