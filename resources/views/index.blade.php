<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Vive Euskadi</title>
</head>
<body>
    <div id="app">
        <main class="flex-row" id="contentIndex">
            {{-- Cabecera --}}
            <cabecera descubre-euskadi="{{ url('descubre-euskadi')}}"  sobre-nosotros="{{ url('')}}"></cabecera>
            {{-- Vídeo --}}
            <section class="videoWrapper" id="videoIndex">
                <video playsinline autoplay muted loop>
                    <source src="{{ URL::asset('videos/visitEuskadi.mp4') }}" type="video/mp4">
                </video>
            </section>
            {{-- Contenido del index --}}
            <section class="row bg-image pt-5 pb-5" id="contenidoPrincipalIndex">
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
                {{-- <index-comp></index-comp> --}}
                <plan-comp></plan-comp>
            </section>
            {{-- Pie de página --}}
            <piepagina></piepagina>
        </main>
    </div>
    {{-- Script --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>