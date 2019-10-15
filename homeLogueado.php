<?php
  $titulo= "Home | Juego de Preguntas y Respuestas";
  $css="home";
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once("./partials/head.php");
?>
<body>
  <!-- NAVIGATION -->
    <header>
        <nav class="navbar navbar-light bg-light col-12">

            <ul class="nav col-9">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                </li>
            </ul>
            <ul class="nav justify-content-end col-3">
                <li class="nav-item active">
                  <a class="nav-link" href="perfil.php">Bienvenido!</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Desloguarse</a>
                </li>
            </ul>
        </nav>    
    </header>
  <!-- MAIN -->
  <div class="container position-relative col-lg-11">
    <a href="jugar.php">
    <img src="img/cerebro.png" class="brain position-absolute" alt="..." />
    </a>
        <div class="row mb-3">
      <div class="is-true col-lg-5">
        <img src="img/verdadero.png" class="true rounded" alt="" />
      </div>
      <div class="is-false col-lg-5">
        <h5>Comienza a jugar</h5>
        <img src="img/falso.png" class="false" alt="" />
      </div>
    </div>
  </div>
</body>
</html>
