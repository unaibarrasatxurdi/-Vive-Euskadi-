<template>
    <main class="col ps-md-2 pt-2">

                        <div class="page-header mt-5 ms-5 ps-4 pt-1" id="titApartado">
                                <h2>Bienvenido</h2>
                        </div>
                        
                        <div class="row" id="componente">
                            <div class="col">
                                <form>
                                    <div class="row">
                                        <div class="form-group col">
                                            <input type="text" class="form-group form-control-lg w-100"  placeholder="Nombre" id="nombre" name="nombre">
                                        </div>
                                        <div class="form-group col">
                                            <input type="text" class="form-group form-control-lg w-100"  placeholder="Apellidos" name="apellidos" id="apellidos">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="text" class="form-group form-control-lg w-100" placeholder="Email" id="email" name="email">
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
                                            <input type="text" class="form-group form-control-lg  w-100"  placeholder="Contraseña antigua" id="contraAnt" name="contraAnt">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="text" class="form-group form-control-lg w-100"  placeholder="Contraseña nueva" id="contraNue" name="contraNue">
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <button type="submit" class="btn border border-dark">Guardar datos</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </main>
    
</template>

<script>

</script>
<style scoped>
#titApartado {
    background-color: #1498C2;
    width: 400px;
    height: 50px;
}

#componente{
    background-color: #EEDDCD;
    margin: 5% 10% 0 10%;
}

input{
    border: solid;
    border-radius: 10px;
    background-color: transparent;
}

form > *{
    margin-top: 2%;
    text-align: center;
}

button{
    width: 25%;
    margin-bottom: 2%;
    margin-top: 2%;
    border-radius: 10px;
}

hr {
    height: 5%;
}
</style>