<?php
require_once(__DIR__ ."/../Model/MMateriales.php");

$con = new \Model\MMateriales() ;

$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad_necesitada"];

$con->createMaterial($nombre,$cantidad);

header("Location: ../index.php");