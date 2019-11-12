<?php
require_once("funciones.php");


// if (!empty($_POST)){
// 	$errores = validateLoginForm();
//
// 	if (empty($errores)){
// 		$datos = sanitizeLoginForm();
// 		if(loginUser($datos)){
// 			header("Location: perfil.php");
// 		}else{$errores["login"] = "Usuario y/o contraseña incorrectos";
// 		}
// 	}
// }
  $titulo= "Edition";
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
          <h3>Edition</h3>
          <form action="" method="post">
          <div>
            <label for="username">New Username</label>
            <input type="text" name="name" class="username"  required
            value=""/>
          </div>
          <div>
            <label for="password">New Password</label>
            <input type="password" name="pass" class="password" />
          </div>
					<label>New picture</label><br>
						<input type="file" name="avatar" />
            <input type="submit" class="button-login" value="Save changes" />
          </div>
          <div>
        </form>
      </div>
    </div>
  </body>
</html>
