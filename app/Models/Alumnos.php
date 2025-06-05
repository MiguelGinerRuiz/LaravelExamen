<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table = 'alumnos';
    protected $fillable = [
        'NIA',
        'Nombre',
        'Apellidos',
        'NombrePadre',
        'NombreMadre',
        'Curso',
        'Aula',
    ];
}
