<!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title', 'Tu Aplicación')</title>
      <!-- Agrega tus enlaces a CSS aquí -->
  </head>
  <body>
      <header>
          @include('layouts.header')
      </header>
      <nav>
          @include('layouts.nav')
      </nav>
      <main>
          @yield('content')
      </main>
      <footer>
          @include('layouts.footer')
      </footer>
      <!-- Agrega tus scripts de JavaScript aquí -->
  </body>
  </html>
