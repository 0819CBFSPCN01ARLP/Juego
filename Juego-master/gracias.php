<?php
  $titulo= "Thanks!";
  $css="style";
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
    <div class="container">
      <div class="alert alert-success" role="alert">
        Su informacion ha sido satisfactoriamente guardada!
      </div>
      <div>
        <a href="home.php"
          ><button type="button" class="btn btn-link">
            Volver a Inicio
          </button></a>
      </div>
    </div>
  </body>
</html>
