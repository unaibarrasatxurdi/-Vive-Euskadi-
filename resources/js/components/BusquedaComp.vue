<template>
<div class="container-fluid">
<table class="table table-borderless">
<thead>
    <tr>
    <th scope="col">Zona</th>
    <th scope="col">Ideal para</th>
    <th scope="col">Tipo</th>
    </tr>
</thead>
<tbody>
    <tr>
    <td scope="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Araba" id="checkAlava">
                <label class="form-check-label" for="checkAlava">
                    Álava
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Gipuzkoa" id="checkGipuzcoa">
                <label class="form-check-label" for="checkGipuzcoa">
                    Guipúzcoa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Bizkaia" id="checkVizcaya">
                <label class="form-check-label" for="checkVizcaya">
                    Vizcaya
                </label>
            </div>
    </td>
    <td scope="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="couple" id="checkPareja">
                <label class="form-check-label" for="checkPareja">
                    Planes en pareja
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="friends" id="checkGrupo">
                <label class="form-check-label" for="checkGrupo">
                    Planes en grupo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="children" id="checkNiños">
                <label class="form-check-label" for="checkNiños">
                    Planes con niños
                </label>
            </div>
    </td>
    <td scope="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="culture" id="checkCultura">
                <label class="form-check-label" for="checkCultura">
                    Cultura
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="water" id="checkDeporte">
                <label class="form-check-label" for="checkDeporte">
                    Agua
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="cuisine" id="checkGastronomia">
                <label class="form-check-label" for="checkGastronomia">
                    Gastronomía
                </label>
            </div>
    </td>
    <td scope="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="landscape" id="checkAventura">
                <label class="form-check-label" for="checkAventura">
                    Naturaleza y paisajes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="children-landscape" id="checkPequeAventura">
                <label class="form-check-label" for="checkPequeAventura">
                    Peque-Aventura
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="culture-cuisine" id="checkUrbanos">
                <label class="form-check-label" for="checkUrbanos">
                    Planes urbanos
                </label>
            </div>
    </td>
    </tr>
</tbody>
</table>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-5 justify-content-center">
    <!-- Generación de planes -->
  <div v-for="(item, index) in paginated('resultado')" :key="index" class="d-flex justify-content-center mb-2">    
    <router-link exact-active-class="active" :to="`/busqueda/${id}/plan/${item.documentName}`" aria-current="page">
        <div class="card text-white">
            <img src="/images/Imagenes/alavaDescubre.jpg" class="card-img " alt="">
            <div class="card-img-overlay">
                <h5 class="card-title float-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h5>
                <p  class="card-text position-absolute start-0 bottom-0 end-0 h-25 text-center fs-5" >{{item.documentName}}</p>
            </div>
        </div>
    </router-link>
    </div>
    </div>
    <div class="col-12 text-center align-items-center">
        <paginate ref="paginator" name="resultado" :list="this.resultado" :per="15"></paginate>
        <paginate-links class="justify-content-center" for="resultado" :hide-single-page="true" :show-step-links="true" :limit="5" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"></paginate-links>
    </div>     
</div>
</template>

<script>
import $ from 'jquery';
export default {
    data (){
        return {
            planes: null ,
            resultado: [],
            filtro: null,
            id: null,
            paginate: ['resultado'],
            cantidadTotal: 0,
        } 
    },
    mounted (){
        this.planes = JSON.parse(localStorage.getItem("planes"));
        const url = window.location.href;
        this.id = url.substring(url.lastIndexOf('/') + 1); 
        this.resultado = this.planes.filter(plan => plan.documentName.toLowerCase().includes(this.id.toLowerCase()));
        this.checkbox();
    },

    methods: {
        filtrar: function(filtroTerritorio, filtroResto) {
            // if(filtro[0].length != 0 || filtro[1].length != 0) {
            //     for(var a = 0; a < filtro.length; a++) {
            //         if(filtro[a] != 0) {
            //             for(var b = 0; b < filtro[a].length; b++) {
            //                 if(a == 0) {
            //                     this.resultado = this.planes.filter(plan => plan.territory.includes(filtro[0][b]));
            //                 } else {
            //                     this.resultado = this.planes.filter(plan => plan.territory.includes(filtro[0]) && plan[filtro[1][b]].includes(1));
            //                     console.log(this.resultado = this.planes.filter(plan => plan[filtro[1][b]].includes(1)));
            //                 }
            //             }
            //         } else {
            //             // this.resultado = this.planes
            //         }
            //     }
            // } else {
            //     this.resultado = this.planes
            //     console.log(filtro);
            // }
            var filtrarTerritorio = [];
            var filtrarResto = [];
            
            if(filtroTerritorio.length != 0) {
                filtrarTerritorio = new Set(filtroTerritorio);
                if (filtrarResto.length != 0) {
                    filtrarResto = new Set(filtroResto);
                    this.resultado = this.planes.filter(plan => filtrarTerritorio.has(plan.territory) && filtrarResto(plan));
                } else {
                    this.resultado = this.planes.filter(plan => filtrarTerritorio.has(plan.territory));
                }
            } else {
                if (filtrarResto.length != 0) {
                    this.resultado = this.planes.filter(plan => plan[filtrarResto[1].includes(1)]);
                    // Probar a añadir "= 1" a cada opción y ale, a pelo
                }
            }
            if (filtroTerritorio.length === 0 && filtroResto.length === 0) {
                this.resultado = this.planes;
            }
        },
        checkbox: function() {
            var s = this;
            $(document).ready(function() {
                // var filtro = [[],[]];
                var filtroTerritorio = [];
                var filtroResto = [];
                $("input:checkbox").on("change", function() {
                    if(this.checked) {
                        if($(this).val() == "Araba" || $(this).val() == "Gipuzkoa" || $(this).val() == "Bizkaia"){
                            // filtro[0].push($(this).val());
                            filtroTerritorio.push($(this).val());
                        } else if($(this).val().includes("-")) {
                            let separado = $(this).val().split("-");
                            // filtro[1].push(separado[0]);
                            // filtro[1].push(separado[1]);
                            filtroResto.push(separado[0]);
                            filtroResto.push(separado[1]);
                        } else {
                            // filtro[1].push($(this).val());
                            filtroResto.push($(this).val());
                        }
                        s.filtrar(filtroTerritorio, filtroResto);
                    } else {
                        // for(var i = 0; i < filtro.length; i++) {
                        //     for(var j = 0; j < filtro[i].length; j++) {
                        //         if($(this).val().includes("-")) {
                        //             let separado = $(this).val().split("-");
                        //             if(filtro[i][j] == separado[0]||filtro[i][j] == separado[1]) {
                        //                 filtro[i].splice([j + 1], 1);
                        //                 filtro[i].splice([j], 1);
                        //             }
                        //         }
                        //         if(filtro[i][j] == $(this).val()) {
                        //             filtro[i].splice([j], 1);
                        //         }
                        //     }
                        // }
                        // s.filtrar(filtro);

                        for (var i = 0; i < filtroTerritorio.length; i++) {
                            if(filtroTerritorio == $(this).val()) {
                                filtroTerritorio.splice([i], 1);
                            }
                        }
                        for (var j = 0; j < filtroResto.length; j++) {
                            if($(this).val().includes("-")) {
                                let separado = $(this).val().split("-");
                                if(filtroResto[j] == separado[0] || filtroResto[j] == separado[1]) {
                                    filtro.splice([j + 1], 1);
                                    filtro.splice([j], 1);
                                }
                            }
                        }
                    } 
                });
                
            });
        },
        
    }
}


</script>


<style scoped>
@font-face {
    font-family: Astral Sisters;
    src: url('/fonts/Astral-Sisters.ttf');
  }
@font-face {
    font-family: PlayfairDisplay;
    src: url('/fonts/PlayfairDisplay.ttf');
}
table{
    background-color:rgba(209, 220, 225, 0.9);
}
th{
    font-family: 'Astral Sisters';
    font-size: 30px;
}
td{
    font-family: PlayFairDisplay;
}
.card-text{
    background-color: rgba(0, 0, 0, 0.5);
    font-family: PlayFairDisplay;
}

.card {
    width: 20rem;
    height: 15rem;
}
.card-img{
    height: 15rem;
}




</style>