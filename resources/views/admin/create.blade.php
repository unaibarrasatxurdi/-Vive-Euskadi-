


@extends('layouts.admin')

@section('content')
<main class="col p-0 d-flex justify-content-center file-select">
   <section id="contNewUser">
      <form action="" method="post">
         
         <div class="d-flex justify-content-center mb-4">
               <label for="fotoUsuario">
                  <img src="/images/Imagenes/login1.png" class="img-fluid circular--square" alt="" id="imgUser">
               </label>
               <input type="file" name="" id="fotoUsuario" onchange="previewFile(this);">
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
         <a href="/admin/gestion-usuarios" class="btn btn-primary mx-2">Volver atrás</a>
         <button type="submit" class="btn btn-primary">Crear</button>
         
        
      </div>
      </form>


   </section>

   
</main>
@endsection