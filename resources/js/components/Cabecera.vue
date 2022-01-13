<template>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
         <img src="/images/logo.png" alt="" width="200" height="100">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="#">Descubre Euskadi</a>
        </li>
        <li class="nav-item">
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
  mounted() {
    console.log("This is cabecera");
  },
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