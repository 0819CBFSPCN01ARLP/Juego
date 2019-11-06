<?php
  $titulo= "Home | Juego de Preguntas y Respuestas";
  $css="master";
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
    
    <div class="container play">
      <div class="row text-center">
        <a href="jugar.php"
          ><img src="img/Play_Button.png" class="play" alt="..."
        /></a>
      </div>
    </div>
  </body>
</html>
