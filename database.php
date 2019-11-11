<!-- Aca creamos el archivo que llama a la base de datos -->

<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "juego";

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  /* Si $conn da todo OK, nos almacena en el mismo, la conexion a la base de datos */
} catch (PDOException $e) {
    /* Si falla, nos muestra mensaje por pantalla */
  die('Connection Failed: ' . $e->getMessage());
}
?>