@extends('layouts.user')

@section('content')
<main class="col ps-md-2 pt-2" id="mainDatosUser">
    <div class="page-header mt-5 ms-5 ps-4 pt-1" id="titApartado">
        <h2>Bienvenido</h2>
    </div>

    <div class="row" id="datosUsuario">
        <div class="col">
            <form class="mt-4">
                <div class="row">
                    <div class="form-group col">
                        <input type="text" class="form-group form-control-lg w-100" placeholder="Nombre" id="nombre" name="nombre" value={{ $user->name }}>
                    </div>
                    <div class="form-group col">
                        <input type="text" class="form-group form-control-lg w-100" placeholder="Apellidos" name="apellidos" id="apellidos">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <input type="text" class="form-group form-control-lg w-100" placeholder="Email" id="email" name="email" value={{ $user->email }}>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr style="border-color: black;">
                    </div>
                    <div class="col">
                        <h3>Cambiar contraseña</h3>
                    </div>
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <input type="text" class="form-group form-control-lg  w-100" placeholder="Contraseña antigua" id="contraAnt" name="contraAnt">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <input type="text" class="form-group form-control-lg w-100" placeholder="Contraseña nueva" id="contraNue" name="contraNue">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" id="botonForm" class="btn border border-dark">Guardar datos</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection