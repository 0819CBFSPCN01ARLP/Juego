<?php
require_once("database.php");
require_once("funciones.php");
if($_SESSION){
$user = getLoggedUserDB($conn);
$user["name"]= $user["Nombre"];
}

  $titulo= "Playing";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include_once("./partials/head.php");
    ?>
    <link rel="stylesheet" href="css/jugar.css" />
  </head>
  <body>
    <header>
      <?php
      include_once("partials/navbar.php");
      ?>
    </header>
    <!-- JUEGO  -->
    <div class="container pt-5">
      <div class="row">
        <div class="col-6"><h2 class="float-left">Puntaje</h2></div>
        <div class="col-6"><h2 class="float-right">Tiempo</h2></div>
      </div>
    </div>
    <!-- preguntas  -->
      <div class="m-auto preguntas">
        <h4 class="text-align-center">EL AGUA HIERVE A 95 GRADOS</h4>
      </div>
      <!-- botones -->
      <div class="m-auto">
        <button class="btn btn-success btn-lg btn-block true m-auto" style="">VERDADERO</button>
        <br>
        <button class="btn btn-danger btn-lg btn btn-block false m-auto">FALSO</button>
      </div>
    </div>
  </body>
</html>
