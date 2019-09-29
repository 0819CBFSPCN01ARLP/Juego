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
    <a href="jugar.php">
    <img src="img/cerebro.png" class="brain position-absolute" alt="..." />
    </a>
    <div class="row mb-3">
      <div class="col-md-6 col-sm-6 col-xs-6 is-true">
        <img src="img/verdadero.png" class="true rounded float-left" alt="" />
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 is-false">
        <img src="img/falso.png" class="false float-right" alt="" />
      </div>
    </div>
  </div>
</body>
</html>
