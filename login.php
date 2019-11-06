<?php
  $titulo= "Login";
  $css="master";
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
        <div class="col-12 img-user">
          <img src="img/hombre.jpg" alt="">
        </div>
          <h3>Login Here</h3>
        <form action="" method="post">
          <div>
            <label for="username">Username</label>
            <input type="text" name="name" class="username"/>
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
            <span style="color:white">Recordarme</span>  
            <input class="mb-1 mt-2" name="recordarme" type="checkbox" id="recordarme">
          </label>
          <a href="registro.php">Don't have an account?</a>
          <br />
          <a href="contacto.php">Forgot your password?</a>
        </form>
      </div>
    </div>
  </body>
</html>
                      
