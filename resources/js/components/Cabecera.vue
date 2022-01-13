<template>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" :href="this.sobreNosotros">
         <img src="/images/logo.png" alt="" width="200" height="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto  mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" :href="this.descubreEuskadi">Descubre Euskadi</a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <img src="/images/linea.png" alt="" width="40" height="60">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Iniciar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
</template>

<script>
export default {
  props: ['descubreEuskadi', 'sobreNosotros'],
};
</script>
<style scoped>
@font-face {
    font-family: Astral Sisters;
    src: url('/fonts/Astral-Sisters.ttf');
  }
*{
    font-family: 'Astral Sisters';
    font-size: 30px;
    padding-top: 0;
    padding-bottom: 0;
    background-color: #1498C2;
}
</style>