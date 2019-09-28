<?php
require_once("./partials/controller.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Juego de Preguntas y Respuestas</title>
    <?php
    include_once("./partials/scripts.php");
    ?>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <!-- NAVIGATION -->
 <?php
    include_once("./partials/navbar.php");
    ?>
    <div class="container position-relative">
      <img src="img/cerebro.png" class="brain position-absolute" alt="..." />
      <div class="row mb-3">
        <div class="col-md-6 col-sm-6 col-xs-6 is-true">
          <img src="img/verdadero.png" class="true rounded float-left" alt="" />
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 is-false">
          <img src="img/falso.png" class="false float-right" alt="" />
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 float-right">
          <a href="jugar.php" class="btn btn-danger btn-block p-3">JUGAR</a>
        </div>
      </div>
    </div>
  </body>
</html>
