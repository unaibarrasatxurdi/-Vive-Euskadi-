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
                <input class="form-check-input" type="checkbox" value="" id="checkAlava">
                <label class="form-check-label" for="checkAlava">
                    Álava
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkGipuzcoa">
                <label class="form-check-label" for="checkGipuzcoa">
                    Gipuzcoa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkVizcaya">
                <label class="form-check-label" for="checkVizcaya">
                    Vizcaya
                </label>
            </div>
      </td>
      <td scope="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkPareja">
                <label class="form-check-label" for="checkPareja">
                    Planes en pareja
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkGrupo">
                <label class="form-check-label" for="checkGrupo">
                    Planes en grupo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkNiños">
                <label class="form-check-label" for="checkNiños">
                    Planes con niños
                </label>
            </div>
      </td>
      <td scope="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkCultura">
                <label class="form-check-label" for="checkCultura">
                    Cultura
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkDeporte">
                <label class="form-check-label" for="checkDeporte">
                    Deporte
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkGastronomia">
                <label class="form-check-label" for="checkGastronomia">
                    Gastronomía
                </label>
            </div>
      </td>
      <td scope="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkAventura">
                <label class="form-check-label" for="checkAventura">
                    Aventura
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkPequeAventura">
                <label class="form-check-label" for="checkPequeAventura">
                    Peque-Aventura
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkUrbanos">
                <label class="form-check-label" for="checkUrbanos">
                    Planes urbanos
                </label>
            </div>
      </td>
    </tr>
  </tbody>
</table>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-5">
  <div class="col mb-2">
    <div class="card text-white">
        <img src="/images/Imagenes/alavaDescubre.jpg" class="card-img " alt="">
        <div class="card-img-overlay">
            <h5 class="card-title float-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
            </h5>
            <p class="card-text position-absolute start-0 bottom-0 end-0 h-25 text-center fs-5">{{this.planes[0]}}</p>
        </div>
    </div>
  </div>
  <div class="col mb-2">
    <div class="card text-white">
        <img src="/images/Imagenes/alavaDescubre.jpg" class="card-img " alt="">
        <div class="card-img-overlay">
            <h5 class="card-title float-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
            </h5>
            <p class="card-text position-absolute start-0 bottom-0 end-0 h-25 text-center fs-5">Urdaibai, bosque, txakoli y Museo de la Paz</p>
        </div>
    </div>
  </div>
  <div class="col mb-2">
    <div class="card text-white ">
        <img src="/images/Imagenes/gipuzcoaDescubre.jpg" class="card-img " alt="">
        <div class="card-img-overlay">
            <h5 class="card-title float-end">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
            </h5>
            <p class="card-text position-absolute start-0 bottom-0 end-0 h-25 text-center fs-5">Urdaibai, bosque, txakoli y Museo de la Paz</p>
        </div>
    </div>
  </div>
<div class="col mb-2">
    <div class="card text-white">
        <img src="/images/Imagenes/vizcayaDescubre.jpg" class="card-img " alt="">
        <div class="card-img-overlay">
            <h5 class="card-title float-end">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
            </h5>
            <p class="card-text position-absolute start-0 bottom-0 end-0 h-25 text-center fs-5">Urdaibai, bosque, txakoli y Museo de la Paz</p>
        </div>
    </div>
  </div>
  
  <div class="col mb-2">
    <div class="card text-white">
        <img src="/images/Imagenes/vizcayaDescubre.jpg" class="card-img " alt="">
        <div class="card-img-overlay">
            <h5 class="card-title float-end">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
            </h5>
            <p class="card-text position-absolute start-0 bottom-0 end-0 h-25 text-center fs-5">Urdaibai, bosque, txakoli y Museo de la Paz</p>
        </div>
    </div>
  </div>
</div>
</div>


    
</template>

<script>
export default {
    data (){
        return {
          planes: null  
        } 
    },
    mounted (){
        this.planes=JSON.parse(localStorage.getItem("planes"));
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