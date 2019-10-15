<?php
  //require_once("./partials/controller.php");
  // session_start();
  // if (!empty($_SESSION["errores"])){
  //   foreach ($_SESSION["errores"] as $key => $error) {
  //     echo $error["mensaje"] ."<br/>";
  //   }
  // }
  function validarRegistro(){
    $errores = [];

    //LLENANDO ARRAYS
    $name = trim($_POST["name"]);
    $mail = trim($_POST["mail"]);
    $pass = trim($_POST["pass"]);



    //SI NOMBRE ESTA VACIO, CREO UNA POSICION CON EL TEXTO A MOSTRAR
    if(empty($name)){
      $errores["errorName"] = "El campo Nombre esta vacio";
    }
    if(empty($mail)){
      $errores["errorMail"] = "El campo Correo Electronico esta vacio";
    }
    if(empty($pass)){
        $errores["errorPass"] = "El campo Contraseña esta vacio";
      }
    if (!(empty($mail))) {
      $condition1 = strpos($mail, '@');;
      $condition2= strpos($mail, '.');;
      if ($condition1 == true && $condition2 == true) {
        $errores["errorMail"] = "Formato de Correo Electronico, no valido";
      }      
    } 
    return $errores;

  }


    //SI VINO INFORMACION POR POST. SINO VIENE NADA, TIRA FALSE, CASO CONTRARIO, TIRA TRUE
    if ($_POST) {
      //VARIABLES PARA PERSISTIR
      $name = trim($_POST["name"]);
      $mail = trim($_POST["mail"]);

      //VARIABLE PARA GUARDA LA FUNCION QUE TRAER EL ARRAY DE ERRORES
      $erroresRegistro = validarRegistro();

      if (count($erroresRegistro) == 0) {
        $usuariosArray = array ();
      $hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);
      $usuario = [
         "mail" => $_POST["mail"],
         "name" => $_POST["name"],
         "pass" => $hash,
         ];


         $usuarios = file_get_contents("usuarios.json");
         $usuariosArray = json_decode($usuarios, true);
         $usuariosArray [] = $usuario;
         $usuariosFinal = json_encode($usuariosArray);
  //       fopen ("usuarios.json", "w");
         file_put_contents("usuarios.json", $usuariosFinal);
        header("location: home.php");
        exit;
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
    <?php if (isset($erroresRegistro) && count($erroresRegistro)) : ?>
    <ul>
      <?php foreach ($erroresRegistro as $unError) : ?>
      <li><?= $unError?></li>
  <?php endforeach;?>
    </ul>
  <?php endif;?>
    <article>
          <section class="container col-sm-10 col-md-8">
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
                placeholder="Escribe tu nombre"
                value="<?php echo isset($name) ? $name : null ?>"
            />
            </div>
            <div class="form-group col-sm-12">
              <label>Correo Electronico</label>
              <input
                type="text"
                id="email"
                name="mail"
                class="form-control"
                placeholder="tucorreo@example.com"
                value="<?php echo isset($mail) ? $mail : null ?>"

                />
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
              <br /><br>
            <div class="text-center pb-2">
              <button type="submit" class="btn" >Registrarse</button>
              <h6 style="color:white" class="mt-3">Recordarme</h6>
              <input type="checkbox" name="recordarme" class="mt-3 mb-0">
            </div>
          </fieldset>
        </form>
      </section>
    </article>
  </body>
</html>
