<template>
  <div class="row" id="cartasIndex">
      <div class="container">
          <div class="row justify-content-around">
              <div class="col-sm-4" id="vizcayaIndex">
                  <article class="card">
                      <img class="card-img-top" src="images/vizcayaIndex.png" alt="Vizcaya">
                      <div class="card-body">
                          <div class="card-text">
                              <p>
                                  Vizcaya es hoy una referencia urbanística reconocida internacionalmente porque la fuerza de su vanguardismo se 
                                  basa en la integración y el respeto a su pasado industrial.
                              </p>
                          </div>
                      </div>
                  </article>
              </div>
              <div class="col-sm-4" id="guipuzcoaIndex">
                  <article class="card">
                      <img class="card-img-top" src="images/guipuzcoaIndex.png" alt="Guipuzcoa">
                      <div class="card-body">
                          <div class="card-text">
                              <p>
                                  Gipuzcoa está llena de municipios con mucho encanto, su costa e interior se encargan de brindarnos un gran 
                                  abanico de posibilidades.
                              </p>
                          </div>
                      </div>
                  </article>
              </div>
              <div class="col-sm-4" id="alavaIndex">
                  <article class="card">
                      <img class="card-img-top" src="images/alavaIndex.png" alt="Álava">
                      <div class="card-body">
                          <div class="card-text">
                              <p>
                                  Álava te ofrece multiples posibilidades para disfrutar de lugares ricos en Patrimonio Cultural, Recorridos 
                                  entre Naturaleza y/o actividades de diferente índole muy interesantes
                              </p>
                          </div>
                      </div>
                  </article>
              </div>
              <p>{{this.$store.state.planes}}</p>
          </div>
      </div>
  </div>
</template>

<script>
export default {

  data: () =>{ 
      return{
          json: null
    }
  },
    async created() { 
        delete axios.defaults.headers.common['X-Requested-With'];
        let response =await axios.get('https://opendata.euskadi.eus/contenidos/ds_recursos_turisticos/planes_experiencias_euskadi/opendata/planes.json');
        this.json = response.data;
        console.log(this.json);
        this.$store.commit('change', this.json);
    }
};
</script>

<style scoped>
    #cartasIndex {
        width: 100%;
    }

    #cartasIndex > .container {
        width: 100%;
    }

    #vizcayaIndex {
        width: 18rem;
    }

    #vizcayaIndex > .card {
        min-height: 48vh;
        background-color: rgba(102, 102, 102, 0.664);
        color: black;
    }

    #guipuzcoaIndex {
        width: 18rem;
    }

    #guipuzcoaIndex > .card {
        min-height: 48vh;
        background-color: rgba(102, 102, 102, 0.664);
        color: black;
    }

    #alavaIndex {
        width: 18rem;
    }

    #alavaIndex > .card {
        min-height: 48vh;
        background-color: rgba(102, 102, 102, 0.664);
        color: black;
    }
</style>