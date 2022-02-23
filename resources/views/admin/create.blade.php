


@extends('layouts.admin')

@section('content')
<main class="col p-0 d-flex justify-content-center">
   <section id="contNewUser">
      <form action="" method="post">
         <div class="drag-drop">
            <input type="file" multiple="multiple" id="photo" />
            <span class="fa-stack fa-2x">
                <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                <i class="fa fa-circle fa-stack-1x top medium"></i>
                <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
            </span>
            <span class="desc">Pulse aquí para añadir una foto</span>
        </div>
        <div class="mb-3">
         <input type="text" class="border rounded-pill border-primary shadow form-control" placeholder="Nombre" required autofocus>
      </div>
      <div class="mb-3">
         <input type="email" class="border rounded-pill border-primary shadow form-control" placeholder="Email" required autofocus>
      </div>
      <div class="mb-3">
         <input type="password" class="border rounded-pill border-primary shadow form-control" placeholder="Contraseña" required autofocus>
      </div>
      <div class="mb-3">
         <input type="password" class="border rounded-pill border-primary shadow form-control" placeholder="Repite la contraseña" required autofocus>
      </div>
      <div class="d-md-flex justify-content-md-center align-items-md-center mb-3">
         <button type="submit" class="btn btn-primary">Crear</button>
         <a href="/admin/gestion-usuarios" class="btn btn-primary mx-2">Volver atrás</a>
        
      </div>
      </form>


   </section>

 










   {{-- <section class="border-primary shadow-sm contact-clean">
      <form method="post">
         <h2 class="text-center">
            Nuevo Usuario
         </h2>
         <div class="mb-3">
            <input type="text" class="border rounded-pill border-primary shadow form-control" placeholder="Nombre" required autofocus>
         </div>
         <div class="mb-3">
            <input type="email" class="border rounded-pill border-primary shadow form-control" placeholder="Email" required autofocus>
         </div>
         <div class="mb-3">
            <input type="password" class="border rounded-pill border-primary shadow form-control" placeholder="Contraseña" required autofocus>
         </div>
         <div class="mb-3">
            <input type="password" class="border rounded-pill border-primary shadow form-control" placeholder="Repite la contraseña" required autofocus>
         </div>
         <div class="d-md-flex justify-content-md-center align-items-md-center mb-3">
            <button type="submit" class="btn btn-primary">Crear</button>

         </div>
      </form>



   </section> --}}
</main>
@endsection