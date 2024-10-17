<?php
require(__DIR__. '/../Model/MArma.php');
require_once(__DIR__. '/../View/VArmas.php');

$id = $_GET['id'];

$con = new Model\MArma();
$arma = $con-> getArma($id);

$vista = new VArmas();
$vista->inithtml();
$vista->verArma($arma);
$vista->endhtml();
?>