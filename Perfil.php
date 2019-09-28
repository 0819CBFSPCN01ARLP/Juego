<?php
require_once("./partials/controller.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <?php
    include_once("./partials/scripts.php");
    ?>
    <link rel="stylesheet" href="./css/perfil.css" />
  </head>
  <body>
    <!-- NAVIGATION -->
    <?php
    include_once("./partials/navbar.php");
    ?>
    <div class="container text-center col-12" id="puntaje">
      <img src="./img/hombre.jpg" alt="" />
      <div class="card text-center">
        <div class="card-header">
          Puntaje de Usuario BlaBlaBla
        </div>
        <div class="card-body">
          <h5 class="card-title">Esta semana has sumado 5000 puntos!</h5>
          <br />
          <br />
          <h5>
            Puntaje total...150000
          </h5>
          <a href="home.html" class="btn">Volver a inicio</a>
        </div>
      </div>
    </div>
  </body>
</html>
