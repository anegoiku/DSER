<?php
require(__DIR__. '/../Model/MArma.php');
require_once(__DIR__. '/../View/VArmas.php');

$con = new Model\MArma();
$armas = $con-> getArmas();

$vista = new VArmas();
$vista->inithtml();
$vista->cabecera();
$vista->tablaArmas($armas);
$vista->endhtml();
?>