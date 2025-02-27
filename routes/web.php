<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
// Se agregó la importación de HomeController al inicio 
use App\Http\Controllers\HomeController; // Importar HomeController
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\CursoController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Definir la ruta principal home
//Se definió la ruta 
//Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::fallback(fn()=>"not found");
//Incluir las rutas de autenticación de Breeze
//require __DIR__.'/auth.php';
//Route::resource("alumno", AlumnoController::class);





// Ruta principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rutas tipo resource
Route::resource('alumnos', AlumnoController::class);
Route::resource('profesor', ProfesorController::class);
Route::resource('curso', CursoController::class);

// Rutas simples con distintos métodos HTTP
Route::get('/acerca', fn() => view('acerca'))->name('acerca');
Route::post('/contacto', fn() => 'Formulario enviado')->name('contacto.enviar');
Route::put('/usuario/{id}', fn($id) => "Actualizar usuario $id")->name('usuario.actualizar');
Route::delete('/usuario/{id}', fn($id) => "Eliminar usuario $id")->name('usuario.eliminar');
Route::patch('/usuario/{id}', fn($id) => "Actualizar parcialmente usuario $id")->name('usuario.patch');

// Ruta con múltiples métodos HTTP
Route::match(['get', 'post'], '/formulario', fn() => 'Manejando GET y POST en /formulario');
Route::any('/cualquier-metodo', fn() => 'Acepta cualquier método HTTP');

// Rutas con parámetros
Route::get('/perfil/{nombre}', fn($nombre) => "Perfil de $nombre")->name('perfil');

// Rutas con parámetros opcionales
Route::get('/blog/{categoria?}', fn($categoria = 'General') => "Blog de la categoría $categoria")->name('blog.categoria');

// Rutas con expresiones regulares en parámetros
Route::get('/producto/{id}', fn($id) => "Producto con ID $id")
    ->where('id', '[0-9]+')
    ->name('producto.mostrar');

// Rutas con vista directamente sin necesidad de un controlador
Route::view('/politica', 'politica-de-privacidad')->name('politica');

// Grupo de rutas con prefijo
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', fn() => 'Panel de Administración')->name('admin.dashboard');
    Route::get('/usuarios', fn() => 'Lista de usuarios')->name('admin.usuarios');
});

// Grupo de rutas con middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/perfil', fn() => 'Tu perfil')->name('perfil');
    Route::get('/configuracion', fn() => 'Configuración')->name('configuracion');
});

// Ruta fallback para manejar URLs no existentes
Route::fallback(fn() => "Página no encontrada");

// Incluir rutas de autenticación
require __DIR__.'/auth.php';