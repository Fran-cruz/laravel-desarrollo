<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Estudiante;

class Cursos extends Model
{
    protected $fillable = ['nombre_curso', 'codigo', 'detalles'];

    pubic function Estudiante(){
        return $this->belongsToMany(Estudiante::class);
    }
}
