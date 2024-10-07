<?php
abstract class Pertsonaia{
    protected $izena;
    protected $biziPuntuak;
    protected $indarra;

    public function __construct(String $izena, int $biziPuntuak, int $indarra){
        $this-> izena = $izena;
        $this-> biziPuntuak = $biziPuntuak;
        $this-> indarra = $indarra;
    }
    abstract function mugitu();
    abstract public function eraso();
    function minaJaso($mina){
        $biziPuntuak= $biziPuntuak - $mina;
        echo "Pertsonaiak mina jaso du. Bizi puntuak: ". $biziPuntuak;
    }

    /**
     * Get the value of izena
     */ 
    public function getIzena()
    {
        return $this->izena;
    }

    /**
     * Set the value of izena
     *
     * @return  self
     */ 
    public function setIzena($izena)
    {
        $this->izena = $izena;

        return $this;
    }

    /**
     * Get the value of biziPuntuak
     */ 
    public function getBiziPuntuak()
    {
        return $this->biziPuntuak;
    }

    /**
     * Set the value of biziPuntuak
     *
     * @return  self
     */ 
    public function setBiziPuntuak($biziPuntuak)
    {
        $this->biziPuntuak = $biziPuntuak;

        return $this;
    }

    /**
     * Get the value of indarra
     */ 
    public function getIndarra()
    {
        return $this->indarra;
    }

    /**
     * Set the value of indarra
     *
     * @return  self
     */ 
    public function setIndarra($indarra)
    {
        $this->indarra = $indarra;

        return $this;
    }
}
?>