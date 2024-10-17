<?php
require(__DIR__. '/../Model/MArma.php');

$id= $_GET['id'];

$con = new Model\MArma();
echo "<script>if(confirm(Estas seguro de que quieres eliminar este usuario?)){
    ".$con->eliminarArma( $id ). "}</script>";


header("Location: usuarios.php");
exit();
?>