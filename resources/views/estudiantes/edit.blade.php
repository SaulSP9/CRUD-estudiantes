@extends('layouts.app')

@section('title', 'Editar Estudiante')

@section('content')
<div class="bg-gray-800 rounded-lg p-6 shadow-lg max-w-lg mx-auto">
    <h2 class="text-xl font-semibold text-blue-400 mb-4">Editar Estudiante</h2>

    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block mb-1">Nombre:</label>
            <input type="text" name="nombre" value="{{ $estudiante->nombre }}" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-gray-100" required>
        </div>
        <div>
            <label class="block mb-1">Correo:</label>
            <input type="email" name="correo" value="{{ $estudiante->correo }}" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-gray-100" required>
        </div>
        <div>
            <label class="block mb-1">Carrera:</label>
            <input type="text" name="carrera" value="{{ $estudiante->carrera }}" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-gray-100" required>
        </div>
        <div>
            <label class="block mb-1">Semestre:</label>
            <input type="number" name="semestre" value="{{ $estudiante->semestre }}" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-gray-100" required>
        </div>

        <div class="flex justify-end space-x-2">
            <a href="{{ route('estudiantes.index') }}" class="px-4 py-2 bg-gray-600 hover:bg-gray-500 rounded text-white">Cancelar</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded text-white">Actualizar</button>
        </div>
    </form>
</div>
@endsection
