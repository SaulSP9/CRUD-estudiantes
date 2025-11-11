<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // (opcional si ya estás en el mismo namespace)

class EstudianteController extends Controller
{
    public function create()
    {
        $estudiantes = Estudiante::orderByDesc('id')->paginate(10);
        return view('estudiantes.create', compact('estudiantes'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre'   => ['required','string','max:100'],
            'correo'   => ['required','email','max:120'],
            'carrera'  => ['required','string','max:100'],
            'semestre' => ['required','integer','min:1','max:12'],
        ]);

        Estudiante::create($data);

        return back()->with('ok', 'Estudiante registrado correctamente.');
    }
}
