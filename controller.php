<?php
// NOMBRE: SI ESTA VACIO O NO
<<<<<<< HEAD

function validarNombre() {

  if (strlen($_POST["nombre"]) == 0) {

    return false;

  } else {

    return true;

  }

}

function validarUsername() {

    if (strlen($_POST["password"])<8){
    
      return ;
    
    } else {
    
      return true;
    
    }
    
    }

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

=======

function validarNombre() {

  if (strlen($_POST["nombre"]) == 0) {

    return false;

  } else {

    return true;

  }

}

function validarUsername() {

    if (strlen($_POST["password"])<8){
    
      return ;
    
    } else {
    
      return true;
    
    }
    
    }

?>
>>>>>>> 7af9cde19b5c1866b76b27b571ace015f313717e
