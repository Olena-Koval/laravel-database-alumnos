<?php

use Illuminate\Support\Facades\Route;
// Se agregó la importación de HomeController al inicio 
use App\Http\Controllers\HomeController; // Importar HomeController

Route::get('/', function () {
    return view('welcome');
});

// Definir la ruta principal home
// Se definió la ruta 
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Incluir las rutas de autenticación de Breeze
require __DIR__.'/auth.php';
