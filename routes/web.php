<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return redirect()->route('estudiantes.create');
});

Route::get('/estudiantes/create', [EstudianteController::class, 'create'])
    ->name('estudiantes.create');

Route::post('/estudiantes', [EstudianteController::class, 'store'])
    ->name('estudiantes.store');

// Si no tienes método index, deja esto comentado o elimínalo
// Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');