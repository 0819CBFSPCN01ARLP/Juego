<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7af9cde19b5c1866b76b27b571ace015f313717e
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once("scripts.php");
    ?>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- NAVIGATION -->
    <?php

    include_once("navbar.php");
    ?>

<article>
      <section class="container col-8 mt-5">
        
        <form
          action="sendmail.php"
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
              <textarea name="textarea" id="textarea" cols="90" rows="10" class="col-8 ml-3" placeholder="Escriba aqui, su consulta"></textarea>
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
<<<<<<< HEAD
</html>
=======
</html>
=======
<h1>ACA VA EL FORMULARIO DE CONTACTO</h1>
>>>>>>> 407fc03e799213f6a7422c27183e136eceee41b2
>>>>>>> 7af9cde19b5c1866b76b27b571ace015f313717e
