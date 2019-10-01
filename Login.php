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
      <div class="login-box text-center mx-auto">
        <img class="avatar mx-auto" src="./img/hombre.jpg" alt="" />
        <h3>Login Here</h3>
        <form action="_login.php" method="post">
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
          <a href="registro.php">Don't have an account?</a>
          <br>          
          <a href="contacto.php">Forgot your password?</a>
          <br>
          <div class="checkbox mt-2">
            <div class="col-6 float-right">
              <input type="checkbox" name="recordarme">
            </div>
            <div class="col-6 float-right">
              <h6 class="ml-5">Recordarme</h6>
            </div>             
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
