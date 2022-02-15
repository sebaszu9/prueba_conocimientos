<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    use HasFactory;

    protected $table='estudiantes';

    protected $fillable = [
        'nombres',
        'apellidos',
        'edad',
        'fecha_nacimiento',
        'padres',
        'alergias',
        'medico'
    ];

    public function padres_familia(){
        return $this->HasOne("App\Models\Padres","id","padres");
    }
}