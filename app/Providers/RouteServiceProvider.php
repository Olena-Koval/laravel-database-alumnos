<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * La ruta principal para la aplicación después de la autenticación.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Registra los servicios de la aplicación.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define las rutas para la aplicación.
     *
     * @return void
     */
    public function map()
    {
        //
    }
}
