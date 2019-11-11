<?php
  require_once("funciones.php");
  $titulo= "Contact";
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
    <section class="container col-12 col-md-8 mt-5">
      <form
        action="contacto.html"
        method="post"
        name="formulario"
        id="formulario"
        autocomplete="off"
      >
        <div class="form-group col-12 ">
          <label>Name</label>
          <input
            type="text"
            id="nombre"
            name="nombre"
            class="form-control"
            placeholder="Write your name"
            required
          />
        </div>
        <div class="form-group col-12">
          <label>Email</label>
          <input
            type="email"
            id="email"
            name="email"
            class="form-control"
            placeholder="Your-email@example.com"
            required
          />
        </div>
        <div class="form-group">
          <textarea
            name="textarea"
            id="textarea"
            cols="90"
            rows="4"
            placeholder="Write your consult here"
            required
          ></textarea>
        </div>
        <div class="text-center mt-1 pb-3">
          <button type="submit" class="btn">Send</button>
        </div>
      </form>
    </section>
  </body>
</html>
