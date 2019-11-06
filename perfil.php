<?php
  $titulo= "Profile";
  $css="master";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include_once("./partials/head.php");
    ?>
    <link rel="stylesheet" href="css/perfil.css" />
  </head>
  <body>
    <header>
      <!-- NAVIGATION -->
    <?php  include_once("partials/navbar.php");?>
    </header>
    <div
      class="container text-center col-lg-8 col-md-8 col-sm-10 col-xs-12 mt-5"
      id="puntaje"
    >
      <div class="card text-center">
        <div class="card-header user-img" style="font-weight:bold">
          <img src="img/hombre.jpg" alt="" />
          Puntaje de Usuario Frula
        </div>
        <div class="card-body">
          <h5 class="card-title">Frula, esta semana has sumado 5000 puntos!</h5>
          <div>
            <a href="index.php
            " class="btn mt-2 mb-2 abm">Volver a inicio</a>
          </div>
          <div>
            <a href="tabla.php
            " class="btn mb-2 abm">Ver Tabla General</a>
          </div>
          <div>
            <a href="registro.php
            " class="btn mb-2 abm">Nuevo Usuario</a>
          </div>
          <div>
            <a href="perfil.php
            " class="btn abm">Modificar Usuario</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

