<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <button
        class="navbar-toggler nabvar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link" href="index.php">Home </a>
          <!-- AL LOGUEARSE , APARECE LA OPCION DE IR AL PERFIL   -->
          <?php if(isset($_SESSION["loggeduserid"])):?>
            <!-- ACA AGREGO DATOS DE HOME LOGUEADO:  -->
          <a class="nav-item nav-link" href="perfil.php">Profile</a>
          <?php endif;?>
          <a class="nav-item nav-link" href="FAQ.php">FAQ</a>
        </div>
        <div class="navbar-nav ml-auto">
          <!-- AL LOGUEARSE, REGISTRO Y LOGIN DESAPARECEN  -->
          <?php if(!isset($_SESSION["loggeduserid"])):?>
          <a class="nav-item nav-link" href="Login.php">Login</a>
          <a class="nav-item nav-link" href="Registro.php">Registration</a>
          <?php endif;?>
          <a class="nav-item nav-link" href="contacto.php">Contact</a>
          <!-- EL LOGOUT SOLO APARECE AL INICIAR SESION -->
        <?php if(isset($_SESSION["loggeduserid"])):?>
        <a class="nav-item nav-link" href="logout.php">Logout</a>
        <?php endif;?>
        </div>
        <!-- IMAGEN NAV
        <?php if(isset($_SESSION["loggeduserid"])):?>
            <img id="logonav" src="<?=$user["file"]; ?>" alt="" />
        <?php endif;?> -->
      </div>
    </nav>
