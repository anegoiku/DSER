<?php
require_once (__DIR__ . "/../Model/MAyudas.php");

$con = new Model\MAyudas();
$laguntzaZerrenda = $con->getAyudas();