<x-layouts.layout>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Editar Alumno</h1>

        <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="label">Nombre</label>
                <input type="text" name="nombre" class="input input-bordered w-full" 
                       value="{{ $alumno->nombre }}" required>
            </div>

            <div class="mb-4">
                <label class="label">DNI</label>
                <input type="text" name="dni" class="input input-bordered w-full" 
                       value="{{ $alumno->dni }}" required>
            </div>

            <div class="mb-4">
                <label class="label">Email</label>
                <input type="email" name="email" class="input input-bordered w-full" 
                       value="{{ $alumno->email }}" required>
            </div>

            <div class="flex justify-between">
                <button type="submit" class="btn bg-blue-600 text-white">Actualizar Alumno</button>
                <a href="{{ route('alumnos.index') }}" class="btn">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.layout>