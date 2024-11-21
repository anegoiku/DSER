<?php
require(__DIR__. '/../Model/MArma.php');

$id = $_POST['id'];
$dano = $_POST['dano'];
$tipo = $_POST['tipo'];

$arma['id']= $id;
$arma['tipo']= $tipo;
$arma['dano']= $dano;

$mArma = new Model\MArma();
$mArma->modificarArma($arma);

header('Location: armas.php');
exit();