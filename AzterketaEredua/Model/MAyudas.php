<?php
namespace Model;
require_once "Konexioa.php";
class MAyudas extends Konexioa{

    public function getAyudas(){
        $query = $this-> getKon()->prepare("SELECT * FROM ayudas");
        $query->execute();

        $emaitza = $query->get_result();
        $ayudas = [] ;
        while($lerroa = $emaitza->fetch_assoc()){
            $ayudas[] = $lerroa;
        }
        $emaitza->free();
        $query->close();
        return $ayudas;
    }

    //GET AYUDAS X ID MATERIAL
    public function getAyuda($id){
        $ayuda = null;
        $query = $this->getKon()->prepare("SELECT * FROM ayudas WHERE id_material= ? ");
        $query->bind_param("i", $id);
        $query->execute();
        $emaitza = $query->get_result();
        while($lerroa = $emaitza->fetch_assoc()){
            $ayuda[] = $lerroa;
        }
        $query->close();
        return $ayuda;
    }

    public function createAyuda($id_material, $cantidad, $nota){
        $query = $this->getKon()->prepare("INSERT INTO ayudas (id_material, cantidad, nota) VALUES (?, ?, ?)");
        $query->bind_param("iis", $id_material, $cantidad, $nota);
        $query->execute();
        $query->close();
    }
}