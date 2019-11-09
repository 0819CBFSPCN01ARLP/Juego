<?php
require_once("funciones.php");

$name = "";
$file = "./img/hombre.jpg";
if (isset($_COOKIE["rememberedUser"])){
	$name = $_COOKIE["rememberedUser"];
}

if (!empty($_POST)){
	$errores = validateLoginForm();

	if (empty($errores)){
		$datos = sanitizeLoginForm();
		if(loginUser($datos)){
			header("Location:index.php");
		}else{$errores["login"] = "Usuario y/o contraseña incorrectos";
		}
	}
}
  $titulo= "Login";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  include_once("./partials/head.php");
  ?>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
      <header>
          <!-- NAVIGATION -->
      <?php  include_once("partials/navbar.php");?>
        </header>
    <div class="container">
      <section class="login-box text-center">
        <div class="col-10 img-user" id="logo">
          <img src="<?=$file; ?>" alt="" />
        </div>
          <form action="" method="post">
            <?php if (isset($errores["login"])): ?>
            <p class="form-text" style="color: red; text-align:center;">
              <?=$errores["login"] ?>
            </p>
            <?php endif;?>
          <div>
            <label for="username">Username</label>
            <input type="text" name="name" class="username"  required
            value="<?php if($_POST && !isset($errores["name"])) echo $_POST["name"]; else echo $name;?>"/>
            <!-- DEVOLUCION ERROR NOMBRE-->
            <?php if(isset($errores["name"])):?>
              <p class="form-text alert-hide">
                <?=$errores["name"]?>
              </p>
            <?php endif;?>
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" name="pass" class="password" />
            <!-- DEVOLUCION ERROR PASSWORD-->
          <?php if(isset($errores["pass"])):?>
            <p class="form-text alert-hide">
              <?=$errores["pass"]?>
            </p>
          <?php endif;?><br>
          </div>
          <div>
            <input type="submit" class="button-login" value="Login" />
          </div>
          <div>
          <label>
            <span style="color:white">Remember me</span>
            <input class="mb-1 mt-1" name="remember-me" type="checkbox" id="remember-me">
          </label>
          <a href="registro.php">Don't have an account?</a>
          <br />
          <a href="contacto.php">Forgot your password?</a>
        </form>
      </div>
    </div>
  </body>
</html>
