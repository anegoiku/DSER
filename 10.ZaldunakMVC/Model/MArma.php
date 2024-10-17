<?php
require_once 'Conexion.php'

class MArmas extends Conexion(){
    public function getArmas(){
        $sentencia = $this-> getCon() ->query("SELECT * FROM 'arma';");
        $armas = [];

        while ($fila = $sentencia -> fetch_asoc()){
            $armas[] = $fila;
        }
        return $armas;
    }
}
?>