<?php
namespace Model;
require_once 'Conexion.php';

class MArma extends Conexion{

    public function getArmas(){
        $sentencia = $this-> getCon() ->query("SELECT * FROM arma");
        $armas = [];

        while ($fila = $sentencia -> fetch_assoc()){
            $armas[] = $fila;
        }
        $sentencia->close();
        return $armas;
    }

    public function getArma($id){
        $arma = null;
        $sentencia = $this-> getCon() -> prepare("SELECT * FROM arma WHERE id = ? ");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();

        $resultado = $sentencia->get_result();

        if($fila = $resultado -> fetch_assoc()){
            $arma = $fila;
        }
        $sentencia->close();
        return $arma;
    }

    public function insertArma($arma){
        $sentencia = $this-> getCon() ->prepare("INSERT INTO arma (dano, tipo) VALUES (?,?)");
        $sentencia-> bind_param("is", $arma["dano"], $arma["tipo"]);

        $sentencia->execute();
        $sentencia->close();
    }

    public function eliminarArma($id){
        $sentencia = $this ->getCon() -> prepare("DELETE FROM arma WHERE id= ?;");
        $sentencia->bind_param("i", $id);
       
        $sentencia->execute();
        $sentencia->close();
    }

    public function modificarArma($arma){
        $sentencia =$this-> getCon() -> prepare("UPDATE arma SET dano=? ,tipo=?  WHERE id = ?;");
        $sentencia-> bind_param("isi", $arma["dano"], $arma["tipo"], $arma["id"]);
        
        $sentencia->execute();
        $sentencia->close();
    }
}
?>