<nav class="md:h-10v bg-nav flex flex-col md:flex-row space-y-0 justify-start items-center px-5
space-x-5">
<button class="btn btn-sm btn-success">About</button>
<button class="btn btn-sm btn-glass">Noticias</button>
<button class="btn btn-sm btn-warning">Contacta</button>
<button class="btn btn-sm btn-glass">History</button>
@auth
    <a href="{{route('alumnos')}}" class="btn btn-sm btn-primary">Alumnos</a>
@endauth

</nav>
