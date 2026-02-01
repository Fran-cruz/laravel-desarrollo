<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\Faculty;
use App\Models\Cursos;

class Student extends Model
{
    protected $fillable = ['name', 'faculty', 'email', 'phone', 'age'];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function course(){
        return $this->belongsToMany(Cursos::class);
    }
}
