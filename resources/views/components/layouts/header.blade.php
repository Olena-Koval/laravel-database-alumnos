{{--Disño para patalla grande--}}
<header class="hidden  md:flex h-15v bg-header flex flex-row justify-between items-center  p-3">
    {{--    --}}
    <!--   -->
    <img class="h-16 max-h-full bg-white" src="{{asset("images/logo.png")}}" alt="logo">
    <h1 class="text-5xl text-white ">GESTIÓN CENTRO</h1>
   

    <div>
        <input type="checkbox" id="menu-toggler" class="peer">
        <br></br>
        <label for="menu-toggler" class="text-3xl">
            &#9778
        </label>
        <div class="hidden bg-gray-200 p-4 rounded-xl peer-checked:flex">
        @guest
            <form action="" class=" flex flex-col">
                <a href="{{route('login')}}" class="btn btn-sm btn-primary btn-outline">Login</a>
                <a href="{{route('register')}}" class="btn btn-sm btn-primary btn-outline">Register</a>
            </form>
        @endguest
        @auth
            {{auth()->user()->name}}
                <form action="{{route("logout")}}" method="post">
                    @csrf
                    <input class="btn btn-sm" type="submit" value="logout">
                </form>

        @endauth
       </div>
    </div>

</header>
{{--Diseño para moviles--}}
<header class="md:hidden bg-header flex flex-col justify-between
 items-center  p-3
">
    {{--    --}}
    <!--   -->
    <img  class="m-4 h-16 max-h-full bg-white" src="{{asset("images/logo.png")}}" alt="logo">
    <div>
        @guest
            <form action="">
                <a href="{{route('login')}}" class="btn btn-sm btn-primary btn-outline">Login</a>
                <button class="btn btn-sm">Register</button>
            </form>
        @endguest
        @auth
            {{auth()->user()->name}}
            <form action="{{route("logout")}}" method="post">
                @csrf
                <input class="btn btn-sm" type="submit" value="logout">
            </form>

        @endauth

    </div>

</header>
