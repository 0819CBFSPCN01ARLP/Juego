<?php
require_once("database.php");
require_once("funciones.php");

if(!$_SESSION){
  header("Location: login.php");
} else {
$user = getLoggedUserDB($conn);
$user["name"]= ucwords($user["Nombre"]); //primer letra mayuscula
}

  $titulo= "Profile";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include_once("./partials/head.php");
    ?>
    <link rel="stylesheet" href="css/perfil.css" />
  </head>
  <body>
    <header>
      <!-- NAVIGATION -->
    <?php  include_once("partials/navbar.php");?>
    </header>
    <div
      class="container text-center col-lg-8 col-md-8 col-sm-10 col-xs-12 mt-5"
      id="puntaje"
    >
      <div class="card text-center">
        <div class="card-header user-img" style="font-weight:bold">
          <img src="<?=$user["file"]; ?>" alt="" />
          <?=$user["name"];?> total score:
        </div>
        <div class="card-body">
          <h5 class="card-title">Congratulation <?=$user["name"];?>!!,
            this week you added 5000 points!</h5>
          <div>
            <a href="index.php
            " class="btn mt-2 mb-3 abm">Return to main page</a>
          </div>
          <div>
            <a href="tabla.php
              " class="btn mb-3 abm">Go to the ranking</a>
          </div>
          <div>
            <a href="edition.php
            " class="btn abm">Edit user</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
