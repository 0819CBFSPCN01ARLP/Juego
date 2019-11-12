<?php
require_once("database.php");
require_once("funciones.php");
if($_SESSION){
$user = getLoggedUserDB($conn);
$user["name"]= $user["Nombre"];
}
// if($_POST){
// $users=editarPerfil($user);
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
            <input type="text" name="newName" class="username" value=""/>
          </div>
          <div>
            <label for="password">New Password</label>
            <input type="password" name="newPass" class="password" />
          </div>
					<label>New picture</label><br>
						<input type="file" name="newAvatar" />
            <input type="submit" class="button-login" value="Save changes" />
          </div>
          <div>
        </form>
      </div>
    </div>
  </body>
</html>
