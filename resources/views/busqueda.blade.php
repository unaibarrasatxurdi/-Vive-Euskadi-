<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Vive Euskadi | Búsqueda</title>
</head>
<body>
    <div id="app">
        <main class="flex-row" id="contentIndex">
            {{-- Cabecera --}}
            @if (Route::has('login') && Route::has('register'))
            @auth
            <cabecera descubre-euskadi="{{ url('descubre-euskadi')}}"  index-route="{{ url('/home')}}" user-route="{{url('user')}}" user-name="<?php echo Auth::user()->name;?>" log-out="{{route('logout')}}" user-Admin="<?php echo Auth::user()->admin?>" admin-route="{{url('admin')}}"></cabecera>
            @else
            <cabecera descubre-euskadi="{{ url('descubre-euskadi')}}"  index-route="{{ url('/home')}}" user-login="{{ route('login') }}" user-register="{{ route('register') }}"></cabecera>
            @endauth
            @endif
            {{-- Vídeo --}}
            <section class="videoWrapper" id="videoIndex">
                <video playsinline autoplay muted loop>
                    <source src="{{ URL::asset('videos/visitEuskadi.mp4') }}" type="video/mp4">
                </video>
            </section>
            {{-- Contenido del index --}}
            <section class="row bg-image mt-5" id="contenidoPrincipalIndex">
                {{-- Barra de búsqueda --}}
                <form action="" class="d-flex justify-content-center" id="busquedaIndex">
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4" id="barraBusquedaIndex">
                        <div class="input-group">
                        <input type="search" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                        </div>
                        </div>
                    </div>
                    <div id="busquedaAvanzadaIndex">
                        
                    </div>
                </form>
                {{-- Complemento --}}
                <busqueda-comp></busqueda-comp>
            </section>
        </main>
        <piepagina></piepagina>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>