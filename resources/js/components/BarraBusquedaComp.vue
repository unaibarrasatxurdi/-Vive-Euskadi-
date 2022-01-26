<template>
    <form  class="d-flex justify-content-center" id="busquedaIndex">
        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4" id="barraBusquedaIndex">
            <div class="input-group">
                <input type="search" aria-describedby="button-addon1" class="form-control border-0 bg-light" id="search-input" v-bind="this.requestBusqueda">
                <div class="input-group-append">
                    <button type="button" id="button-addon1" class="btn btn-link" ><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </form>



    
</template>

<script>
import $ from "jquery";

export default {
  props: ['requestBusqueda'],
  mounted(){
    $(window).ready(function() {
         $("#busquedaIndex").submit(function (e) {
            e.preventDefault();
            buscar();
        });
        $('#button-addon1').on("click", function () {
            buscar();
        }

        );
        });

        function buscar(){
            var textoBuscar = document.getElementById('search-input').value;
            if(textoBuscar==""){
                alert('El campo de busqueda no puede estar vacio')

            }else{
                window.location.replace("/busqueda/"+textoBuscar);
            }
        }
  }
};
  
</script>
