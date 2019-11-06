<?php
  $titulo= "Contact";
  $css="master";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  include_once("./partials/head.php");
  ?>
    <link rel="stylesheet" href="css/contacto.css" />
  </head>
  <body>
    <header>
      <!-- NAVIGATION -->
    <?php  include_once("partials/navbar.php");?>
    </header>
    <section class="container col-8 mt-5">
      <form
        action="contacto.html"
        method="post"
        name="formulario"
        id="formulario"
        autocomplete="off"
      >
        <div class="form-group col-12 ">
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
        <div class="form-group col-12">
          <label>Correo Electronico</label>
          <input
            type="email"
            id="email"
            name="email"
            class="form-control"
            placeholder="tucorreo@example.com"
            required
          />
        </div>
        <div class="form-group">
          <textarea
            name="textarea"
            id="textarea"
            cols="90"
            rows="5"
            placeholder="Escriba aqui, su consulta"
            required
          ></textarea>
        </div>
        <div class="text-center mt-5 pb-3">
          <button type="submit" class="btn">Enviar</button>
        </div>
      </form>
    </section>
  </body>
</html>
