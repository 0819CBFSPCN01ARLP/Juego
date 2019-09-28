<?php
require_once("./partials/controller.php");

  $titulo= "Home | Juego de Preguntas y Respuestas";
  $css="main";
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
