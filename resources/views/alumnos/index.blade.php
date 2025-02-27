<x-layouts.layout>
    <div class="max-h-full overflow-x-auto">
        @if (session()->has("status"))
            <h2>{{ session()->get("status") }}</h2>
        @endif

        <a class="btn btn-success" href="{{ route("alumnos.create") }}">Crear alumno</a>
        
        <table class="table table-xs table-pin-rows">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->dni }}</td>
                        <td>{{ $alumno->email }}</td>
                        <td class="flex gap-2">
                            <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-error" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.layout>
