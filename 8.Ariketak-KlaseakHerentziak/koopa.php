<?php
class Koopa extends Etsaia{
    protected $oskolBerdeaDa;

    /**public function __construct(boolean $oskolBerdeaDa){
        $this-> oskolBerdeaDa = $oskolBerdeaDa;
    }**/
    public function __construct(){}

    function mugitu(){
        echo "Koopa Luigirekin eskeletoa mugitzen animatu da.";
    }
    function eraso(){
        echo "Koopak eraso egiten du, jaurtigai bihurtzen da oskolean sartuta.";
    }

    /**
     * Get the value of oskolBerdeaDa
     */ 
    public function getOskolBerdeaDa()
    {
        return $this->oskolBerdeaDa;
    }

    /**
     * Set the value of oskolBerdeaDa
     *
     * @return  self
     */ 
    public function setOskolBerdeaDa($oskolBerdeaDa)
    {
        $this->oskolBerdeaDa = $oskolBerdeaDa;

        return $this;
    }
}
?>