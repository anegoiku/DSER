<?php
require_once(__DIR__ . "/../Model/MMateriales.php");

$con = new Model\MMateriales() ;
$materialak = $con->getMateriales();