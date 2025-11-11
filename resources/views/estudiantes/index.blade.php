@extends('layouts.app')

@section('title', 'Lista de Estudiantes')

@section('content')
<div class="bg-gray-800 rounded-lg p-6 shadow-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-blue-400">Lista de Estudiantes</h2>
        <a href="{{ route('estudiantes.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
           + Nuevo Estudiante
        </a>
    </div>

    @if ($estudiantes->isEmpty())
        <p class="text-gray-400">No hay estudiantes registrados.</p>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-300">
                <thead class="bg-gray-700 text-gray-100">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Correo</th>
                        <th class="px-4 py-2">Carrera</th>
                        <th class="px-4 py-2">Semestre</th>
                        <th class="px-4 py-2 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @foreach ($estudiantes as $estudiante)
                        <tr class="hover:bg-gray-700">
                            <td class="px-4 py-2">{{ $estudiante->id }}</td>
                            <td class="px-4 py-2">{{ $estudiante->nombre }}</td>
                            <td class="px-4 py-2">{{ $estudiante->correo }}</td>
                            <td class="px-4 py-2">{{ $estudiante->carrera }}</td>
                            <td class="px-4 py-2">{{ $estudiante->semestre }}</td>
                            <td class="px-4 py-2 text-center space-x-2">
                                <a href="{{ route('estudiantes.edit', $estudiante->id) }}"
                                   class="text-yellow-400 hover:text-yellow-300">Editar</a>
                                <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST"
                                      class="inline-block" onsubmit="return confirm('¿Eliminar estudiante?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-300">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
