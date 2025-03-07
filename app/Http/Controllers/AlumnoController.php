<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all(); // Traemos todos los alumnos de la base de datos
        return view('alumnos.index', compact('alumnos')); // Pasamos la variable a la vista
    }
    
    public function create()
    {
        return view("alumnos.create");
    }

    public function store(Request $request)
    {
        // Validación de datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'dni' => 'required|string|size:9|unique:alumnos,dni',
            'email' => 'required|email|unique:alumnos,email'
        ]);

        // Crear y guardar el alumno con los datos validados
        $alumno = Alumno::create($validated);

        // Establecer mensaje de éxito en la sesión
        session()->flash('status', "Se ha creado el alumno {$alumno->nombre}");

        // Redirigir a la vista de índice de alumnos
        return redirect()->route('alumnos.index');
    }

    public function show(string $id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.show', compact('alumno'));
    }

    public function edit(string $id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.edit', compact('alumno'));
    }

    //    public function edit(Alumno $alumno)
    //     {
   //     
   //     return view('alumnos.edit', ["alumno" => $alumno]);
   //      }

    public function update(Request $request, string $id)
    {
        $alumno = Alumno::findOrFail($id);
        
        // Validación de datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'dni' => 'required|string|size:9|unique:alumnos,dni,' . $id,
            'email' => 'required|email|unique:alumnos,email,' . $id
        ]);

        // Actualizar el alumno con los datos validados
        $alumno->update($validated);
        
//      public function update(Request $request, Alumno $alumno)
//        {
//         $alumno->update($request->input());
//           session()->flash("status", "Se ha actualizado el alumno $alumno->nombre");
//         return redirect(route("alumnos.index"));  
//        }


        // Redirigir con mensaje de éxito
        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno actualizado correctamente');
    }

   // public function destroy(string $id)
   // {
   //     $alumno = Alumno::findOrFail($id);
   //     $alumno->delete();
        
   //     // Redirigir con mensaje de éxito
   //     return redirect()->route('alumnos.index')
   //         ->with('success', 'Alumno eliminado correctamente');
  //  }

      public function destroy(Alumno $alumno)
      {
        $alumno->delete();
        session()->flash("status", "Se ha borrado $alumno->nombre");
        return redirect(route("alumnos.index"));
    }
}