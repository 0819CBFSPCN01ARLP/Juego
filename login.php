<?php
// VARIABLES TITULO Y ARCHIVO CSS
  $titulo= "Login";
  $css="style";
// VALIDACION DE DATOS DE LOGIN
  $nombre= ""; //nombre vacio para persistencia



  if ($_POST){
    // primero corroboramos que no esten vacios(si lo esta, no entra a las llaves)
    if (($_POST["name"]!=null) && ($_POST["pass"]!=null)) {

  // despues traemos los usuarios del json y validamos
  $usuariosExistentes=file_get_contents("usuarios.json");
  $arrayDeUsuarios=json_decode($usuariosExistentes,true);

  foreach ($arrayDeUsuarios as $usuario) {

    if($_POST["name"] == $usuario["name"]){
      $nombre= $_POST["name"]; // persiste el nombre
      if(password_verify($_POST["pass"], $usuario["pass"])){
        header('Location: homeLogueado.php');
        exit;
      } else {echo'<script type="text/javascript">
        alert("verifique su contraseña");
        window.location.href="login.php";
        </script>';}
    }
  }
  echo'<script type="text/javascript">
        alert("no existe el usuario");
        window.location.href="login.php";
        </script>';
  }
  echo'<script type="text/javascript">
    alert("debe completar los campos");
    window.location.href="login.php";
    </script>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once("./partials/head.php");
?>
  <body>
    <?php
    include_once("./partials/navbar.php");
    ?>
    <div class="container class-md-8 ">
      <div class="login-box text-center mx-auto">
        <img class="avatar mx-auto" src="./img/hombre.jpg" alt="" />
        <h3>Login Here</h3>
        <form action="" method="post">
          <div>
            <label for="username">Username</label>
            <input type="text" name="name" class="username" value="<?=$nombre?>"/>
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" name="pass" class="password" />
          </div>
          <div>
            <input type="submit" class="button-login" value="Login" />
          </div>         
          <div>
          <label class="mb-2">
            <input class="form-check-input" name="recordarme" type="checkbox" id="recordarme">
            Recordarme
          </label>
          <a href="registro.php">Don't have an account?</a>
          <br />
          <a href="contacto.php">Forgot your password?</a>
        </form>
      </div>
    </div>
  </body>
</html>
