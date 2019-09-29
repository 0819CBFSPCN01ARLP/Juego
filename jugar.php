<?php
require_once("./partials/controller.php");

  $titulo= "Playing";
  $css="style";
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once("./partials/head.php");
?>
<body>
<!-- NAVIGATION -->
<?php
include_once("./partials/navbar.php");
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
