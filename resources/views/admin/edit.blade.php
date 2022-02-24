


@extends('layouts.admin')

@section('content')
<section class="content container-fluid">
   <div class="">
       <div class="col-md-12">

           @includeif('partials.errors')

           <div class="card card-default">
               <div class="card-header">
                   <span class="card-title">Editar {{ $user->name }}</span>
               </div>
               <div class="card-body">
                   <form method="POST" action="{{ route('admin.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                    
                    <div class="d-flex justify-content-center">
                        <img src="/images/Imagenes/bodyDescubre.jpg" class="img-fluid circular--square" alt="" id="imgUser">
                 </div>




                     {{-- <div class="drag-drop">
                        @if($user->foto)
                        <img src="/imagenes/{{ $user->foto }}" style="width: 100px; height: 100px;" alt="">
                        @endif
                        <input type="file" multiple="multiple" id="photo" />
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                            <i class="fa fa-circle fa-stack-1x top medium"></i>
                            <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
                        </span>
                        <span class="desc">Pulse aquí para añadir una foto</span>
                    </div> --}}

                    <div class="mb-3">
                     <label for="">Nombre: </label>  
                     <input type="text"class="form-control" value={{ $user->name }}>                    
                    </div>

                    <div class="mb-3">
                     <label for="">Email: </label>  
                     <input type="email" class="form-control" value={{ $user->email }}>                   
                    </div>

                    <div class="mb-3">
                     <label for="">Nivel: </label>  
                     <select name="" id="" class="form-control  mb-3">
                         <option value={{ $user->admin }}>{{ $user->admin == 1 ? "Administrador" : "Usuario" }}</option>
                         <option value={{ $user->admin }}>{{ $user->admin == 1 ? "Usuario" : "Administrador" }}</option>
                     </select>            
                    </div>

                    <div class="d-md-flex justify-content-md-center align-items-md-center mb-3">
                     <button type="submit" class="btn btn-primary">Guardar</button>
                     <a href="/admin/gestion-usuarios" class="btn btn-primary mx-2">Volver atrás</a>
                    
                  </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</section>

</main>
@endsection