<x-layouts.layout title="alumnos">
    <div class="max-h-full flex flex-col justify-center items-center overflow-x-auto">
    <h1 class="text-4xl text-green-700">Listado de alumnos</h1>
    
  <table class="table table-xs table-pin-rows table-pin-cols">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>DNI</th>
        <th>email</th>
      </tr>
    </thead>
    @foreach ($alumnos as $alumno)
        <tr>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->dni}}</td>
            <td>{{$alumno->email}}</td>
        </tr>
      
    @endforeach
  </table>
</div>
</x-layouts.layout>
