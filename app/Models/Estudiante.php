<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class Estudiante extends Model
{
    protected $fillable = ['nombre', 'facultad', 'correo', 'telefono'];

    public function profile(){
        return $this->hasOne(Profile::class);
    }
}
