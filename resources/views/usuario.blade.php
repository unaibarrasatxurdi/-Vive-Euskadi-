<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vue Js Page</title>

        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    </head>
    <body>
        <div id="app">
            @if (Route::has('login') && Route::has('register'))
            @auth
            <cabecera descubre-euskadi="{{ url('descubre-euskadi')}}"  index-route="{{ url('/home')}}" user-route="{{url('user')}}" user-name="<?php echo Auth::user()->name;?>" log-out="{{route('logout')}}"></cabecera>
            @else
            <cabecera descubre-euskadi="{{ url('descubre-euskadi')}}"  index-route="{{ url('/home')}}" user-login="{{ route('login') }}" user-register="{{ route('register') }}"></cabecera>
            @endauth
            @endif
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div class="col-auto px-0">
                        <div id="sidebar" class="collapse collapse-horizontal show border-end">
                            <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                                <!-- APARTADO DATOS ADMINISTRADOR -->
                                <div class="img bg-wrap text-center" id="sidebarAdmin">
                                    <div>
                                        <img src="../../images/adminPrueba.jpg" class="img-fluid" id="backAdmin">
                                    </div>
                                    <div id="datosAdmin">
                                        <img src="../../images/login1.png" id="imgAdmin">
                                        <h3>Usuario</h3>
                                        <h5>Email</h5>
                                    </div>
                                </div>
                                <div id="btnMenuAdmin">
                                    <a href="#"  class="list-group-item border-end-0 d-inline-block text-truncate mt-5" data-bs-parent="#sidebar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg> <span>Datos</span></a>
                                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg><span>Plan</span></a>
                                    <a href="#"  class="list-group-item border-end-0 d-inline-block text-truncate mt-5" data-bs-parent="#sidebar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                        </svg> <span>Favoritos</span></a>
                                    <a href="#"  class="list-group-item border-end-0 d-inline-block text-truncate mt-5" data-bs-parent="#sidebar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-right-text" viewBox="0 0 16 16">
                                        <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
                                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                    </svg> <span>Comentarios</span></a>
                                </div>
                                <div class="text-center">
                                    <button id="logOut" class="mt-5 border border-dark">Cerrar sesión</button>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <main class="col ps-md-2 pt-2">
                        <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="border border-dark rounded-3 py-2 text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                        </a>
                    <datosuser></datosuser>
                    <planesuser></planesuser>
                    <planescerca></planescerca>
                    <planesfav></planesfav>
                    <gestioncomentariosuser></gestioncomentariosuser>
                </div>
            </div>
            <piepagina></piepagina>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>