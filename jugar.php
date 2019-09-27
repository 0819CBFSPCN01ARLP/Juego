<?php
require_once("controller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Playing</title>
  <?php
  include_once("scripts.php");
  ?>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- NAVIGATION -->
  <?php
    include_once("navbar.php");
    ?>
<!-- JUEGO  -->
    <div class="container text-center">
      <section class="seccion">
        <div class= "row" class="col-sm-10 col-lg-8">
          <div class="hijos">
            <h3>Puntuación </h3>
          </div>
          <div class="hijos">
              <h3>Tiempo </h3>
          </div>
        </div>
<!-- preguntas  -->
        <div class="preguntas" class="col-sm-10 col-lg-8">
          <p>¿Verdadero o falso?</p>
        </div>
<!-- botones -->
        <div class= "row" class="col-10 col-lg-8">
          <div class="">
            <a href="#"><img class="VF" src="img/true.png" alt=""></a>
          </div>
          <div class="">
            <a href="#"><img class="VF" src="img/false.png" alt=""></a>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
