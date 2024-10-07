<?php
abstract class Etsaia extends Pertsonaia{
    protected $boterea;

    public function __construct(int $boterea){
        $this-> boterea = $boterea;
    }

    abstract function mugitu();
    abstract function eraso();

    /**
     * Get the value of boterea
     */ 
    public function getBoterea()
    {
        return $this->boterea;
    }

    /**
     * Set the value of boterea
     *
     * @return  self
     */ 
    public function setBoterea($boterea)
    {
        $this->boterea = $boterea;

        return $this;
    }
}
?>