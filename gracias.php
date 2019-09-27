<?php
require_once("./controller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thanks!</title>
<?php
include_once("scripts.php");
?>
<link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <div class="container">
      <div class="alert alert-success" role="alert">
        Su informacion ha sido satisfactoriamente guardada!
      </div>
      <div>
        <a href="home.html"
          ><button type="button" class="btn btn-link">
            Volver a Inicio
          </button></a>
      </div>
    </div>
  </body>
</html>
