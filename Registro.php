<?php
require_once("./partials/controller.php");
 

  $titulo= "Register";
  $css="style";
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once("./partials/head.php");
?>
  <body>
    <!-- NAVIGATION -->
    <?php
    include_once("./partials/navbar.php");
    ?>
    <article>
          <section class="container col-sm-10 col-md-8">
            <h1 class="h2 text-center my-5">Formulario de registro</h1>
            <form
              action="registro.php"
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
                placeholder="Al menos 8 caracteres"
                required/> <br/>
              <label>Foto de Perfil</label> <br/>
                <input
                  type="file"
                  name="avatar"
                  required/>
            </div>
            <br />
            <div class="text-center pb-2">
              <button type="submit" class="btn" >Registrarse</button>
            </div>
          </fieldset>
        </form>
      </section>
    </article>
  </body>
</html>
