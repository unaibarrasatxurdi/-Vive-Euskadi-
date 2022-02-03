<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" :href="this.indexRoute">
        <img src="/images/logo.png" alt="" width="200" height="100" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" :href="this.descubreEuskadi"
              >Descubre Euskadi</a
            >
          </li>
          <li class="nav-item d-none d-lg-block">
            <img src="/images/linea.png" alt="" width="40" height="60" />
          </li>
          <li class="nav-item dropdown" v-if="this.userRoute != null">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="dropdownMenuLink"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              {{ this.userName }}
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="dropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" :href="this.userRoute">Mi Perfil</a>
              </li>
              <li v-if="this.userAdmin == 1">
                <a class="dropdown-item" :href="this.adminRoute"
                  >Administrador</a
                >
              </li>
              <li>
                <a class="dropdown-item" :href="this.logOut">Cerrar Sesión</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" v-if="this.userLogin">
            <a class="nav-link" :href="this.userLogin"> Iniciar Sesión</a>
          </li>
          <li class="nav-item d-none d-lg-block" v-if="this.userRegister">
            <img src="/images/linea.png" alt="" width="40" height="60" />
          </li>
          <li class="nav-item" v-if="this.userRegister">
            <a class="nav-link" :href="this.userRegister"> Registrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  //Todas las variables externas
  props: [
    "descubreEuskadi",
    "indexRoute",
    "userLogin",
    "userRegister",
    "userRoute",
    "userName",
    "logOut",
    "userAdmin",
    "adminRoute",
  ],
};
</script>
<style scoped>
@font-face {
  font-family: Astral Sisters;
  src: url("/fonts/Astral-Sisters.ttf");
}
* {
  font-family: "Astral Sisters";
  font-size: 30px;
  padding-top: 0;
  padding-bottom: 0;
  background-color: #1498c2;
}
</style>