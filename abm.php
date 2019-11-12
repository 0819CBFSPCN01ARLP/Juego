<?php
require_once("database.php");
require_once("funciones.php");

if(!$_SESSION){
  header("Location: login.php");
} else {
$user = getLoggedUserDB($conn);
$user["name"]= $user["Nombre"];
}
if($user["Nombre"]!="admin"){
  header("Location:login.php");
}

  $titulo= "ABM";
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
        <div class="card-header" style="font-weight:bold">

          Question manager:
        </div>
        <div class="row mb-1">
          <div class="col-6">Category: </div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
        </div>


        <div>
          <input type="submit" class="button-login" value="Modify" />

          <input type="submit" class="button-login" value="Remove" />

          <input type="submit" class="button-login" value="Insert" />
        </div>
      </div>
    </div>
  </body>
</html>
