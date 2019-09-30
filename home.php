<?php
require_once("./partials/controller.php");
  $titulo= "Home | Juego de Preguntas y Respuestas";
  $css="home";
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
  <!-- MAIN -->
  <div class="container position-relative col-lg-11">
    <a href="jugar.php">
    <img src="img/cerebro.png" class="brain position-absolute" alt="..." />
    </a>
        <div class="row mb-3">
      <div class="is-true col-lg-5">
        <img src="img/verdadero.png" class="true rounded" alt="" />
      </div>
      <div class="is-false col-lg-5">
        <h5>Comienza a jugar</h5>
        <img src="img/falso.png" class="false" alt="" />
      </div>
    </div>
  </div>
</body>
</html>
