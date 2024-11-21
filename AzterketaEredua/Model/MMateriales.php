<?php
namespace Model;
require_once "Konexioa.php";

class MMateriales extends Konexioa{

    public function getMateriales(){
        $query = $this->getKon()->prepare("SELECT * FROM materiales_necesitados");
        $query->execute();

        $emaitza = $query->get_result();
        $materiales = [];

        while($lerroa = $emaitza->fetch_assoc()){
            $materiales[] = $lerroa;
        }
        $emaitza->free();
        $query->close();
        return $materiales;
    }

    public function getMaterial($id){
        $query = $this->getKon()->prepare("SELECT * FROM materiales_necesitados WHERE id = ?");
        $query->bind_param("i", $id);
        $query->execute();

        $emaitza = $query->get_result();
        $material = [];
        while($lerroa = $emaitza->fetch_assoc()){
            $material[] = $lerroa;
        }
        $emaitza->free();
        $query->close();
        return $material;
    }

    public function createMaterial($nombre, $cantidad_necesitada){
        $query = $this->getKon()->prepare("INSERT INTO materiales_necesitados (nombre, cantidad_necesitada) VALUES (?, ?)");
        $query->bind_param("si", $nombre, $cantidad_necesitada);
        $query->execute();
        $query->close();
    }

    public function updateMaterial($id, $cantidad_donada){
        $query = $this->getKon()->prepare("UPDATE materiales_necesitados SET cantidad_necesitada = cantidad_necesitada - ? WHERE id = ?");
        $query->bind_param("ii", $cantidad_donada, $id);
        $query->execute();
        $query->close();
    }
}