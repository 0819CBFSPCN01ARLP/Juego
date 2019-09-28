<?php
require_once("./partials/controller.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <?php
    include_once("./partials/scripts.php");
    ?>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- NAVIGATION -->
    <?php
    include_once("./partials/navbar.php");
    ?>
    <div class="container class-md-8 ">
      <div class="login-box text-center mt-4">
        <img class="avatar mx-auto" src="./img/hombre.jpg" alt="" />
        <h3>Login Here</h3>
        <form>
          <div>
            <label for="username">Username</label>
            <input type="text" class="username" />
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" class="password" />
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
