<?php
$css="style";

$data = $_POST;
$ok = array();
$errores = array();
foreach ($data as $key => $input){

  if($key == "email"){
    $condicion1 = strpos($input, '@');
    $condicion2 = strpos($input, '.');
    if ($condicion1 == true && $condicion2 == true){
      $ok['email'] = $input;
    }else{
      $errores['email']["input"] = $input;
      $errores['email']["mensaje"] = "El Email no es valido";
    }
  }

  if ($key == "nombre"){
    if ( strlen ($input) > 2  && is_string($input)){
      $ok['nombre'] = $input;
    }else{
      $errores['nombre']["input"] = $input;
      $errores['nombre']["mensaje"] = "El nombre no es válido. Por favor ingrese al menos 3 caracteres y no ingrese números";
    }
  }

  if ($key == "password"){

    if ( strlen ($input) >= 8 ){
      $ok['password'] = $input;
    }else{
      $errores['password']["input"] = $input;
      $errores['password']["mensaje"] = "La contraseña debe tener al menos 8 caracteres";
    }
  }
}



    if (empty($errores)){
      $usuariosArray = array ();
      $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
      $usuario = [
         "email" => $_POST["email"],
         "nombre" => $_POST["nombre"],
         "password" => $hash,
         ];


         $usuarios = file_get_contents("usuarios.json");
         $usuariosArray = json_decode($usuarios, true);
         $usuariosArray [] = $usuario;
         $usuariosFinal = json_encode($usuariosArray);
  //       fopen ("usuarios.json", "w");
         file_put_contents("usuarios.json", $usuariosFinal);
         echo "Usuario creado con éxito, en breve será redireccionado al Login";
         header('refresh: 10; url=Login.php');

    }
    if(!empty($errores)) :
    include_once("./partials/head.php");
    require_once("./partials/controller.php");
    include_once("./partials/navbar.php");
    ?>
    <body>
    <article>
          <section class="container col-sm-10 col-md-8">
            <h1 class="h2 text-center my-5">Formulario de registro</h1>
            <form action="validacion.php" method="post" name="formulario" id="formulario" autocomplete="off" enctype="multipart/form-data">
          <fieldset>
            <div class="form-group col-sm-12 ">
              <label>Nombre</label>
              <input
                type="text"
                id="nombre"
                name="nombre"
                class="form-control"
                placeholder="Escribe tu nombre"
                value="<?php echo (isset($errores['nombre']['mensaje'])) ? $errores['nombre']['mensaje']: $errores['nombre']['input'];?> "/>

            </div>
            <div class="form-group col-sm-12">
              <label>Correo Electronico</label>
              <input
                type="text"
                id="email"
                name="email"
                class="form-control"
                placeholder="tucorreo@example.com"
                value='<?php echo (isset($errores['email']['mensaje'])) ? $errores['email']['mensaje']: $errores['email']['input'] ; ?> '/>

            </div>
            <div class="form-group col-sm-12">
              <label>Contraseña</label>
              <input
                type="password"
                id="contra"
                name="password"
                class="form-control"
                placeholder="Al menos 8 caracteres"
                value="<?php echo (isset($errores['password']['mensaje'])) ? $errores['password']['mensaje']: $errores['password']['input']?> "/>

               <br/>
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
<?php endif; ?>
