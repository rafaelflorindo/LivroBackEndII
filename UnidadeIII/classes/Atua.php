<?php

class Atua
{
    public $filme;
    public $ator;
    public $papel;   

    public function __construct()
    {
        $this->filme = "";
        $this->ator = "";
        $this->papel = "";       
    }
    public function setAtua(Filme $filme, Ator $ator, $papel){
        $this->papel = $papel;
        $this->ator = $ator;
        $this->filme = $filme;

        $ator->atua[]=$this;
        $filme->atua[]=$this;
        
    }
}