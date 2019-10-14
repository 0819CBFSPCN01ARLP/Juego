<?php
// VARIABLES TITULO Y ARCHIVO CSS
  $titulo= "Login";
  $css="style";
// VALIDACION DE DATOS DE LOGIN
  $nombre= ""; //nombre vacio para persistencia


  if ($_POST){
    // primero corroboramos que no esten vacios(si lo esta, no entra a las llaves)
    if (($_POST["nombre"]!=null) && ($_POST["password"]!=null)) {

  // despues traemos los usuarios del json y validamos
  $usuariosExistentes=file_get_contents("usuarios.json");
  $arrayDeUsuarios=json_decode($usuariosExistentes,true);

  foreach ($arrayDeUsuarios as $usuario) {

    if($_POST["nombre"] == $usuario["nombre"]){
      $nombre= $_POST["nombre"]; // persiste el nombre
      if(password_verify($_POST["password"], $usuario["password"])){
        header('Location: home.php');
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
            <input type="text" name="nombre" class="username" value="<?=$nombre?>"/>
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" name="password" class="password" />
          </div>
          <div>
            <input type="submit" class="button-login" value="Login" />
          </div>
          <br />
          <a href="registro.php">Don't have an account?</a>
          <br />
          <a href="contacto.php">Forgot your password?</a>
        </form>
      </div>
    </div>
  </body>
</html>
