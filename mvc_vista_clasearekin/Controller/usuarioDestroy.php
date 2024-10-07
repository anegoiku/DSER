<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios



// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Model/MUsuario.php');

$username = $_GET['username'];

$con = new Model\MUsuario();
echo "<script>if(confirm(Estas seguro de que quieres eliminar este usuario?)){
    ".$con->eliminarUsuario( $username ). "}</script>";


header("Location: usuarios.php");
exit();
?>
