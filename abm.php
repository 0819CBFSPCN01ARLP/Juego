<?php
require_once("funciones.php");

if(!$_SESSION){
  header("Location: login.php");
} else {
$user = getLoggedUser();
$user["name"]= ucwords($user["name"]); //primer letra mayuscula
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
          Administrador de Preguntas:
        </div>
        <div class="row mb-1">
          <div class="col-6">Categoría: </div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div>
        </div>
        <div class="row mb-1">
          <div class="col-6">Pregunta</div>
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
