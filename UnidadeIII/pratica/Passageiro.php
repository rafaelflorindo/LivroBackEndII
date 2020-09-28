<?php

class Passageiro
{
    private $passaporte, $nome;
    public $passagens;

    public function __construct()
    {
        $this->passaporte = "";
        $this->nome = "";
        $this->passagens = array();
    }

    public function setPassageiro($passaporte, $nome){
        $this->passaporte = $passaporte;
        $this->nome = $nome;
    }

}