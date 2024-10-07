<?php
include_once('salto.php');
class Luigi extends Pertsonaia{
    protected $arintasuna;

    /**public function __construct(int $arintasuna){
        $this-> arintasuna = $arintasuna;
    }**/
    public function __construct(){}

    function mugitu(){
        echo "Luigi dantzan ari da eskeletoa mugitzen.";
    }
    function eraso(){
        echo "Luigik eraso egiten du epicamente.";
    }
    function saltoEgin(){
        echo "Luigik salto egitean botere bat lortu du.";
    }

    /**
     * Get the value of arintasuna
     */ 
    public function getArintasuna()
    {
        return $this->arintasuna;
    }

    /**
     * Set the value of arintasuna
     *
     * @return  self
     */ 
    public function setArintasuna($arintasuna)
    {
        $this->arintasuna = $arintasuna;

        return $this;
    }
}
?>