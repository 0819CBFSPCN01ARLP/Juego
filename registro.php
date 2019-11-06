<?php
  $titulo= "Register";
  $css="master";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  include_once("./partials/head.php");
  ?>
    <link rel="stylesheet" href="css/registro.css" />
  </head>
  <body>
    <header>
      <!-- NAVIGATION -->
    <?php  include_once("partials/navbar.php");?>
    </header>
      <section class="container col-lg-8 col-md-8 col-sm-8 login-box">
        <h1 class="h2 text-center my-4">Formulario de registro</h1>
        <form
          action=""
          method="post"
          name="formulario"
          id="formulario"
          autocomplete="off"
          enctype="multipart/form-data"

        >
      <fieldset>
        <div class="form-group col-sm-12 ">
          <label>Nombre</label>
          <input
            type="text"
            id="nombre"
            name="name"
            class="form-control"
            placeholder="Escribe tu nombre"/>
        </div>
        <div class="form-group col-sm-12">
          <label>Correo Electronico</label>
          <input
            type="text"
            id="email"
            name="mail"
            class="form-control"
            placeholder="tucorreo@example.com"/>
        </div>
        <div class="form-group col-sm-12">
          <label>Contraseña</label>
          <input
            type="password"
            id="pass"
            name="pass"
            class="form-control"
            placeholder="Al menos 8 caracteres"
             
            /> <br/>
          <label>Foto de Perfil</label> <br/>
            <input
              type="file"
              name="avatar"
              />
          <div class="text-center mt-4">
          <button type="submit" class="btn" >Registrarse</button>
          <br>
          <span style="color:white">Recordarme</span> 
          <input type="checkbox" name="recordarme" class="mt-3 mb-0" style="color:white">
        </div>
        </fieldset>
      </form>
      </section>  
  </body>
</html>
