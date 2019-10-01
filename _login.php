<?php


$usuarios = file_get_contents("usuarios.json");
 $usuarios = json_decode(file_get_contents("usuarios.json"), true);
var_dump($usuarios);
exit;

header('Location: Login.php');







// $response["errores"] = $errores;
// $response["ok"] = $ok;
// return $response;

 ?>
