<x-layouts.layout>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Detalles del Alumno</h1>

        <div class="mb-4">
            <label class="font-bold">Nombre:</label>
            <p class="mt-1">{{ $alumno->nombre }}</p>
        </div>

        <div class="mb-4">
            <label class="font-bold">DNI:</label>
            <p class="mt-1">{{ $alumno->dni }}</p>
        </div>

        <div class="mb-4">
            <label class="font-bold">Email:</label>
            <p class="mt-1">{{ $alumno->email }}</p>
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn bg-blue-600 text-white">Editar</a>
            <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn bg-red-600 text-white" 
                        onclick="return confirm('¿Estás seguro de que quieres eliminar este alumno?')">
                    Eliminar
                </button>
            </form>
            <a href="{{ route('alumnos.index') }}" class="btn">Volver</a>
        </div>
    </div>
</x-layouts.layout>