<?php
require_once("database.php");
require_once("funciones.php");

if($_SESSION){
$user = getLoggedUserDB($conn);
$user["name"]= ucwords($user["Nombre"]); //primer letra mayuscula
}
  $titulo= "Home | Juego de Preguntas y Respuestas";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  include_once("./partials/head.php");
  ?>
  <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
     <!-- NAVIGATION -->
    <?php  include_once("partials/navbar.php");?>
<div class="text-center">
  <h4>Welcome<?php if($_SESSION){echo " ".$user["name"];}?>!! click here to start your game! </h4>
<br>
</div>
<a href="jugar.php">
  <img src="img/Play_Button.png" class="play" alt="..."/>
</a>
      <!-- <div class="text-center"> -->
      <!-- </div> -->
  </body>
</html>
