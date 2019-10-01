<?php

$data = $_POST;
$ok = array();
$errores = array();
foreach ($data as $key => $input){

  if($key == "email"){
    $condicion1 = strpos($input, '@');
    $condicion2 = strpos($input, '.');
    if ($condicion1 == true && $condicion2 == true){
      $ok['email'] = $input;
    }else{
      $errores['email']["input"] = $input;
      $errores['email']["mensaje"] = "El Email no es valido";
    }
  }

  if ($key == "nombre"){
    if ( strlen ($input) > 2  && is_string($input)){
      $ok['nombre'] = $input;
    }else{
      $errores['nombre']["input"] = $input;
      $errores['nombre']["mensaje"] = "El nombre no es válido. Por favor ingrese al menos 3 caracteres y no ingrese números";
    }
  }

  if ($key == "password"){

    if ( strlen ($input) >= 8 ){
      $ok['password'] = $input;
    }else{
      $errores['password']["input"] = $input;
      $errores['password']["mensaje"] = "La contraseña debe tener al menos 8 caracteres";
    }
  }
}

$_SESSION["errores"] = $errores;
$_SESSION["ok"] = $ok;

if (empty($errores)){
   $data = json_encode($data);
   $fp = fopen('usuarios.json', 'a+');
   fwrite($fp, $data);
   fclose($fp);
}


header('Location: Registro.php');







// $response["errores"] = $errores;
// $response["ok"] = $ok;
// return $response;

 ?>
