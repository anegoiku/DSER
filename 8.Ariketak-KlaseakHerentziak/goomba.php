<?php
include_once('etsaia.php');
class Goomba extends Etsaia{
    protected $azkartasuna;

    /**public function __construct(int $azkartasuna){
        $this-> azkartasuna = $azkartasuna;
    }**/
    public function __construct(){}

    function mugitu(){
        echo "Goomba mugitzen ari da oso poliki poliki.";
    }
    function eraso(){
        echo "Goombak Mario eraman du aurretik.";
    }


    /**
     * Get the value of azkartasuna
     */ 
    public function getAzkartasuna()
    {
        return $this->azkartasuna;
    }

    /**
     * Set the value of azkartasuna
     *
     * @return  self
     */ 
    public function setAzkartasuna($azkartasuna)
    {
        $this->azkartasuna = $azkartasuna;

        return $this;
    }
}
?>