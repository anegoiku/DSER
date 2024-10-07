<?php
include_once('salto.php');
include_once('pertsonaia.php');
class Mario extends Pertsonaia{
    protected $gaitasunBerezia;

    /**public function __construct(String $gaitasunBerezia){
        $this-> gaitasunBerezia = $gaitasunBerezia;
    }**/
    public function __construct(){}

    public function mugitu(){
        echo "Mario mugitzen ari da biraka.";
    }
    public function eraso(){
        echo "Mariok goombari eraso egiten ari da indar handiz.";
    }
    public function saltoEgin(){
        echo "Mariok salto egitean txanpona lortu du.";
    }

    /**
     * Get the value of gaitasunBerezia
     */ 
    public function getGaitasunBerezia()
    {
        return $this->gaitasunBerezia;
    }

    /**
     * Set the value of gaitasunBerezia
     *
     * @return  self
     */ 
    public function setGaitasunBerezia($gaitasunBerezia)
    {
        $this->gaitasunBerezia = $gaitasunBerezia;

        return $this;
    }
}
?>