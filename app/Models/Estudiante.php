<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['nombre', 'correo', 'carrera', 'semestre'];

    // Relación con Carrera
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}