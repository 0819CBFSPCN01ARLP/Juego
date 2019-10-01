<?php

  $usuariosExistentes=file_get_contents("usuarios.json");
  $arrayDeUsuarios=json_decode($usuariosExistentes,true);
  foreach ($arrayDeUsuarios as $usuario) {
    if($_POST["nombre"] == $usuario["nombre"] &&  (password_verify($_POST["password"], $usuario['password']))){
      echo "Login Exitoso!";
    }else{
      echo "Usted confundió el nombre o la contraseña";
    }
  }

// $response["errores"] = $errores;
// $response["ok"] = $ok;
// return $response;

 ?>
