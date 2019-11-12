<?php
require_once("database.php");
require_once("funciones.php");

if($_SESSION){
$user = getLoggedUser();
}

if (!empty($_POST)){
	$errores = validateRegisterForm();

	if (empty($errores)){
		$datos = sanitizeRegisterForm();
		// registerUser($datos);  ->ESTA GUARDABA EN JSON

		//ESTO GUARDA EN BASE DE DATOS EL USUARIO REGISTRADO
		$sql= "INSERT INTO usuarios (Id_usuarios, Nombre, Email, Pass, foto)
						VALUES (null, :nombre, :email, :pass, :foto)";
		$stmt= $conn->prepare($sql);
		// $stmt->bindParam(":id_usuarios", 'null');
		$stmt->bindParam(":nombre", $_POST["name"]);
		$stmt->bindParam(":email", $_POST["mail"]);
		$stmt->bindParam(":pass", $data["pass"]);
		$stmt->bindParam(":foto", $data["file"]);

	  $stmt->execute();

		header("Location: login.php");
	}
}
  $titulo= "Register";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  include_once("./partials/head.php");
  ?>
    <link rel="stylesheet" href="css/registro.css" />
  </head>
  <body>
    <header>
      <!-- NAVIGATION -->
    <?php  include_once("partials/navbar.php");?>
    </header>
      <section class="container col-lg-8 col-md-8 col-sm-8 login-box mt-5">
        <form
          action=""
          method="post"
          name="formulario"
          id="formulario"
          autocomplete="off"
          enctype="multipart/form-data"

        >
      <fieldset>
        <div class="form-group col-sm-12 ">
          <label>Username</label>
          <input type="text" id="nombre" name="name" class="form-control" placeholder="write your name"
            value="<?php if($_POST && !isset($errores["name"])) echo $_POST["name"]?>" required/>

            <!-- DEVOLUCION ERROR NOMBRE-->
            <?php if(isset($errores["name"])):?>
              <p class="form-text alert-hide">
                <?=$errores["name"]?>
              </p>
            <?php endif;?>

        </div>
        <div class="form-group col-sm-12">
          <label>Email</label>
          <input type="text" id="email" name="mail" class="form-control" placeholder="your-email@example.com"
          value="<?php if($_POST && !isset($errores["mail"])) echo $_POST["mail"]?>" required/>

            <!-- DEVOLUCION ERROR EMAIL-->
          <?php if(isset($errores["mail"])):?>
            <p class="form-text alert-hide">
              <?=$errores["mail"]?>
            </p>
          <?php endif;?>

        </div>
        <div class="form-group col-sm-12">
          <label>Password</label>
          <input type="password" id="pass" name="pass" class="form-control" placeholder="not less than 6 characters" required/>

            <!-- DEVOLUCION ERROR PASSWORD-->
          <?php if(isset($errores["pass"])):?>
            <p class="form-text alert-hide">
              <?=$errores["pass"]?>
            </p>
          <?php endif;?>
          <label>Picture</label>
            <input type="file" name="avatar" />
          <div class="text-center mt-1">
          <button type="submit" class="btn" >Register me</button>
        </div>
        </fieldset>
      </form>
      </section>
  </body>
</html>
