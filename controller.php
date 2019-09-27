<?php
// NOMBRE: SI ESTA VACIO O NO

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
