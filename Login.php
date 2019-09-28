<?php
require_once("./partials/controller.php");

  $titulo= "Login";
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
    <div class="container class-md-8 ">
      <div class="login-box text-center mt-4">
        <img class="avatar mx-auto" src="./img/hombre.jpg" alt="" />
        <h3>Login Here</h3>
        <form action="login.php" method="post">
          <div>
            <label for="username">Username</label>
            <input type="text" class="username" />
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" class="password" />
          </div>
          <div>
            <input type="submit" class="button-login" value="login" />
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