<?php
require_once("./partials/controller.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registry</title>
  <?php
  include_once("./partials/scripts.php");
  ?>
  <link rel="stylesheet" href="css/style.css">
</head>

  <body>
    <!-- NAVIGATION -->
    <?php

    include_once("./partials/navbar.php");
    ?>
    <article>
      <section class="container col-sm-10 col-md-8 ">
        <h1 class="h2 text-center my-5">Formulario de registro</h1>
        <form
          action="Registro.php"
          method="post"
          name="formulario"
          id="formulario"
          autocomplete="off"
        >
          <fieldset>
            <div class="form-group col-sm-12 ">
              <label>Nombre</label>
              <input
                type="text"
                id="nombre"
                name="nombre"
                class="form-control"
                placeholder="Escribe tu nombre"
                required
              />
            </div>
            <div class="form-group col-sm-12">
              <label>Correo Electronico</label>
              <input
                type="email"
                id="email"
                name="email"
                class="form-control"
                placeholder="tucorreo@example.com"
                required/>
            </div>
            <div class="form-group col-sm-12">
              <label>Contraseña</label>
              <input
                type="password"
                id="contra"
                name="password"
                class="form-control"
                placeholder="6 a 8 caracteres"
                required/>
            </div>
            <br />
            <div class="text-center pb-2">
              <button type="submit" class="btn">Registrarse</button>
            </div>
          </fieldset>
        </form>
      </section>
    </article>
  </body>
</html>
