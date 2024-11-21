<?php
require(__DIR__. '/../Model/MArma.php');
require_once(__DIR__. '/../View/VArmas.php');

$id = $_GET['id'];

$mArma = new Model\MArma();
$arma = $mArma->getArma($id);

$vista = new VArmas();
$vista->inithtml();
$vista->formEditArma($arma);
$vista->endhtml();