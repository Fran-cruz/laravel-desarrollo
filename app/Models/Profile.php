<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estudiante;

class Profile extends Model
{
    /** @use HasFactory<\Database\Factories\ProfileFactory> */
    use HasFactory;
    protected $fillable = ['address', 'birth_date'];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
}
