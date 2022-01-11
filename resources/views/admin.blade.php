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

            <cabecera></cabecera>

            <main>
                <div class="container-fluid">
                    <div class="row flex-nowrap">
                        <div class="col-auto px-0">
                            <div id="sidebar" class="collapse collapse-horizontal show border-end">
                                <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                                    {{-- APARTADO DATOS ADMINISTRADOR --}}
                                    <div class="img bg-wrap text-center py-4">
                                        <div class="hero">
                                            <h1>Cute kittehs everywhere!</h1>
                                        </div>




                                        {{-- <div class="user-logo">
                                            <div><img src="../images\login1.png" id="imgAdmin"></div>
                                            <h3>Administrador</h3>
                                            <h5>Email</h5>
                                        </div> --}}
                                    </div>
                                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                      </svg> <span>Gestión de usuarios</span></a>
                                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-text" viewBox="0 0 16 16">
                                        <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
                                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                      </svg> <span>Gestión de comentarios</span></a>
                                </div>
                                <button>Cerrar sesión</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </main>

        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>