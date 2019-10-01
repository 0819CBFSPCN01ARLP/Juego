<?php

$data = $_POST;

$usuarios = json_decode(fopen('usuarios.json', 'r'));
var_dump($usuarios);
exit;




if (password_verify('rasmuslerdorf', $hash)) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}








// $response["errores"] = $errores;
// $response["ok"] = $ok;
// return $response;

 ?>
