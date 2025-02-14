<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vive Euskadi | Administrador</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>

<body>

    <div id="app" class="col-xs-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-12">
                {{-- Cabecera --}}
                @if (Route::has('login') && Route::has('register'))
                @auth
                <cabecera descubre-euskadi="{{ url('descubre-euskadi')}}" index-route="{{ url('/home')}}" user-route="{{url('user/datosUsuario')}}" user-name="<?php echo Auth::user()->name; ?>" log-out="{{route('logout')}}" user-Admin="<?php echo Auth::user()->admin ?>" admin-route="{{url('admin/gestion-usuarios')}}"></cabecera>
                @else
                <cabecera descubre-euskadi="{{ url('descubre-euskadi')}}" index-route="{{ url('/home')}}" user-login="{{ route('login') }}" user-register="{{ route('register') }}"></cabecera>
                @endauth
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 p-0" id="barraLateral">
                <div class="img bg-wrap text-center" id="contDatos">
                    <div class="col-md-12 p-0">
                        <img src="../../images/adminPrueba.jpg" class="img-fluid" id="backAdmin">
                    </div>
                    <div id="datosAdmin">
                        <img src="../../images/login1.png" id="imgAdmin">
                        <h3>{{ Auth::user()->name }}</h3>
                        <h5>{{Auth::user()->email }}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="btnMenuAdmin">

                        <a href="{{route('admin.adminUsuario')}}" class=" btn text-truncate mt-5 mb-2 mx-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            <span>Gestión de usuarios</span>
                        </a>
                        <a href="{{route('admin.adminComent')}}" class=" btn text-truncate mt-2 mb-5 mx-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-right-text" viewBox="0 0 16 16">
                                <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <span>Gestión de comentarios</span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-9 container p-0" id="cuerpo">
                @yield('content')
            </div>
        </div>
        <piepagina></piepagina>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>