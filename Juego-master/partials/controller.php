<?php
// NOMBRE: SI ESTA VACIO O NO

function validarNombre() {
  if (strlen($_POST["nombre"]) == 0) {
    return false;
  } else {
    return true;
  }
}


/* VALIDAR MAIL DE REGISTRO */       
function validarMail(){
  $emailExistente= "Este mail ya se encuentra registrado en el sistema";
  $usuariosExistentes=file_get_contents("usuarios.json");
  $arrayDeUsuarios=json_decode($usuariosExistentes,true);
  foreach ($arrayDeUsuarios as $usuario) {
    if($_POST["email"] == $usuario["email"]){
      return $emailExistente;
    }
  }
}
/* VALIDAR LONGITUD DE CONTRASENIA */

function validarUsername() {
    if (strlen($_POST["password"])<8){
      return "La contraseña debe tener al menos 8 caracteres";
        } else {
          return true;
        }
      }

    
        
        //GUARDAR FOTO DE PERFIL
           function FotoPerfil(){
            if ($_FILES) {
              if ($_FILES["avatar"]["error"] == 0) {
                 $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
                 if($ext=="jpg"||$ext=="jpeg"||$ext=="png") {
                   $nombre= $_FILES["avatar"]["name"];
                   $archivo=$_FILES["avatar"]["tmp_name"];
                   $ext= pathinfo($nombre, PATHINFO_EXTENSION);
                   $path = "img/avatar.".$ext;
                   move_uploaded_file($archivo, $path);

                   header('Location: gracias.php');
                   exit;
           }   
                }
              }
              }
      
               /* SI ESTA TODO OK */
function crearUsuario() {
  $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $usuario = [
     "email" => $_POST["email"],
     "username" => $_POST["username"],
     "password" => $hash,
     ];
     $usuarios = file_get_contents("usuarios.json");
     $usuariosArray = json_decode($usuarios, true);
     $usuariosArray [] = $usuario;
     $usuariosFinal = json_encode($usuariosArray);
     file_put_contents("usuarios.json", $usuariosFinal);
    }
       

?>
