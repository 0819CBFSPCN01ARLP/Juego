<?php
require_once("./partials/controller.php");

  $titulo= "Profile";
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
    <div class="container text-center col-12 mt-5" id="puntaje">
      <img src="./img/hombre.jpg" alt="" class="col-2"/>
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
