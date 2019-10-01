<?php
  require_once("./partials/controller.php");
  session_start();
  if (!empty($_SESSION["errores"])){
    foreach ($_SESSION["errores"] as $key => $error) {
      echo $error["mensaje"] ."<br/>";
    }
  }

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
              action="validacion.php"
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

              />
            </div>
            <div class="form-group col-sm-12">
              <label>Correo Electronico</label>
              <input
                type="text"
                id="email"
                name="email"
                class="form-control"
                placeholder="tucorreo@example.com"
                />
            </div>
            <div class="form-group col-sm-12">
              <label>Contraseña</label>
              <input
                type="password"
                id="contra"
                name="password"
                class="form-control"
                placeholder="Al menos 8 caracteres"
                /> <br/>
              <label>Foto de Perfil</label> <br/>
                <input
                  type="file"
                  name="avatar"
                  />
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
