<?php

class Passagem
{
    private $voo, $passageiro, $poltrona;

    public function __construct()
    {
        $this->voo = "";
        $this->passageiro = "";
        $this->poltrona = "";
    }

    public function setPassagem(Voo $voo, Passageiro $passageiro, $poltrona){
        $this->voo = $voo;
        $this->passageiro = $passageiro;
        $this->poltrona = $poltrona;

        $voo->passagens[]=$this;
        $passageiro->passagens[]= $this;
    }
}