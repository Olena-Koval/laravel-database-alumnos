<x-layouts.layout title="Proyecto Laravel">
    @guest
    <div
        class="hero min-h-full"
        style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">

   
        </div>
    </div>
    @endguest
    @auth
            <div class="card bg-base-100 image-full w-96 shadow-xl">
                <figure>
                    <img
                        src="{{asset("images/alumnos.avif")}}" alt="Alumnos" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Alumnos</h2>
                    <p>LISTA de alumnos esta aqui</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Entrar</button>
                    </div>
                </div>
            </div>
    @endauth
</x-layouts.layout>
