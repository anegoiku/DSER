<?php
require(__DIR__. '/../Model/MArma.php');

$dano = $_POST['dano'];
$tipo = $_POST['tipo'];

$con = new Model\MArma();
$arma["dano"] = $dano;
$arma["tipo"] = $tipo;

$con->insertArma($arma);
header("Location: armas.php");
exit();
?>