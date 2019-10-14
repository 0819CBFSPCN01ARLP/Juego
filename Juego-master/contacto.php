<?php
  $titulo= "Contact";
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
      <section class="container col-8 mt-5">
        <form
          action="contacto.php"
          method="post"
          name="formulario"
          id="formulario"
          autocomplete="off"
        >
          <fieldset>
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
                required/>
            </div>
            <div class="form-group">
              <textarea name="textarea" id="textarea" cols="90" rows="5" class="ml-3 mt-3" placeholder="Escriba aqui, su consulta" required></textarea>
            </div>
            <br />
            <div class="text-center pb-2">
              <button type="submit" class="btn">Enviar</button>
            </div>
          </fieldset>
        </form>
      </section>
    </article>
</body>
</html>
