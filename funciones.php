<?php
session_start();


//FUNCIONES DE REGISTRO: MAIL EXISTENTE, TRAER/GUARDAR JSON, VALIDACION Y SANIDAD DE DATOS, REGISTRAR USUARIO.
function existeEmail($mail){
  $usuarios = getAllUsers();
  foreach ($usuarios as $usuario) {
    if ($usuario["mail"] == $mail){
      return true;
    }
  }return false;
}

function getAllUsers(){
  $contenidosDelArchivo = file_get_contents("usuarios.json");
  $usuarios = json_decode($contenidosDelArchivo,true);
  return $usuarios;
}

function saveUsers($usuarios){
  $contenidosDelArchivo = json_encode($usuarios, JSON_PRETTY_PRINT); /// $contenidosDelArchivo = <UN STRING + el usuario nuevo>
  file_put_contents("usuarios.json",$contenidosDelArchivo);
}


function validateRegisterForm(){
  $errores = [];
  $name = trim($_POST["name"]);
  if (!isset($_POST["name"]) || empty($name)){
    $errores["name"] = "El campo nombre es obligatorio";
  }elseif(strlen($name) <= 3){
    $errores["name"] = "El nombre debe tener más de tres caracteres";
  }
  $mail = trim($_POST["mail"]);
  if (!isset($_POST["mail"]) || empty($mail)){
    $errores["mail"] = "El campo email es obligatorio";
  }elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    $errores["mail"] = "El campo email debe tener un email válido";
  }elseif(existeEmail($mail)){
    $errores["mail"] = "El email ya se encuentra registrado";
  }
  $pass = $_POST["pass"];
  if (!isset($_POST["pass"]) || empty($_POST["pass"])){
    $errores["pass"] = "La contraseña es obligatoria";
  } elseif (strlen($_POST["pass"])<6){
   $errores["pass"] = "La contraseña debe tener al menos 6 caracteres";
   }
  $file= $_FILES["avatar"]["tmp_name"];
   if($_FILES["avatar"]["error"] == 0){
       $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
       if($ext!="jpg" && $ext!="jpeg" && $ext!="png"){
         $errores["file"] = "La imagen debe ser de formato jpg, jpeg o png";
       }
  }
  return $errores;
}


function sanitizeRegisterForm(){
  $data= [];
  $data["name"]= trim($_POST["name"]);
  $data["mail"]= strtolower(trim($_POST["mail"]));
  $data["pass"]= password_hash($_POST["pass"],PASSWORD_DEFAULT);
  return $data;
}

function saveFile($id){
 if($_FILES){
  $ruta="imgperfil";
  $file= $_FILES["avatar"]["tmp_name"];
  $nombrearchivo= $id;
  move_uploaded_file($file, $ruta."/".$nombrearchivo.".jpg");
  $ruta= $ruta."/".$nombrearchivo.".jpg";
  return $ruta;
  }
}

function registerUser($data){
  $usuarios = getAllUsers();
  $id = 0;
  if (!empty($usuarios)){  //Obtener el ultimo usuario
    $ultimoIndice = count($usuarios) - 1;
    $id = $usuarios[$ultimoIndice]["id"] + 1;
  }
  $usuario = [];  //donde guardamos los datos
  $usuario["id"] = $id;
  $usuario["name"] = $data["name"];
  $usuario["mail"] = $data["mail"];
  $usuario["pass"] = $data["pass"];
  $usuario["file"] = saveFile($id);

  $usuarios[] = $usuario;
  saveUsers($usuarios);
}


// FUNCIONES PARA EL LOGIN: VALIDACION Y SANIDAD DE DATOS, LOGUEAR USUARIO.
function validateLoginForm(){
  $errores = [];
  $name = trim($_POST["name"]);
  if (!isset($_POST["name"]) || empty($name)){
    $errores["name"] = "El campo nombre es obligatorio";
  }
  if (!isset($_POST["pass"]) || empty($_POST["pass"])){
    $errores["pass"] = "La contraseña es obligatoria";
  }
  return $errores;
}

function sanitizeLoginForm(){
  $data = [];
  $data["name"]= trim($_POST["name"]);
  $data["pass"] = $_POST["pass"]; // NO VA HASHEADA
  if (isset($_POST["remember-me"])){
    $data["remember-me"] = true;
  }
  return $data;
}

function loginUser($data){
  $usuarios = getAllUsers();
  foreach ($usuarios as $usuario) {  //recorrer los usuarios hasta encontrar un email
    if ($usuario["name"] == $data["name"]){
      if(password_verify($data["pass"], $usuario["pass"])){
        if($data["remember-me"]){
          rememberCredentials($data["name"]);
        }
        $_SESSION["loggeduserid"] = $usuario["id"];
        return true;
      }else{
        return false;
      }
    }
  }
  return false;
}

function rememberCredentials($name){
  setcookie("rememberedUser",$name, time()+60*60*24*30); //30 dias
}

// OBTENER AL USUARIO Y PODER MOSTRAR SUS DATOS
function getLoggedUser(){
  $usuarios = getAllUsers();
  foreach ($usuarios as $usuario) {
    if ($usuario["id"] == $_SESSION["loggeduserid"]){
      return $usuario;
    }
  }  return null;
}

 ?>
