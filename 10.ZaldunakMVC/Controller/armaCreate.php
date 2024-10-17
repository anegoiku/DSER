<?php
require(__DIR__. '/../Model/MArma.php');
require_once(__DIR__. '/../View/VArmas.php');

$vista = new VArmas();
$vista->inithtml();
$vista->formArma();
$vista->endhtml();
?>