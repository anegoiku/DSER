<?php
require_once(__DIR__ ."/../Model/MAyudas.php");
require_once(__DIR__ ."/../Model/MMateriales.php");

$conAyudas = new Model\MAyudas() ;
$conMateriales = new Model\MMateriales() ;

$id = $_POST["id_material"];
$cantidad = $_POST["cantidad"];
$nota = $_POST["nota"];

$material = $conMateriales->getMaterial($id);
var_dump($material);
if ($cantidad > $material["cantidad_necesitada"]) {
    echo "No puedes donar mas de lo que es necesario";
}else if($cantidad <= $material["cantidad_necesitada"]){
    $conAyudas->createAyuda($id, $cantidad, $nota);
    $conMateriales->updateMaterial($id, $cantidad);
}

header("Location: ../index.php");