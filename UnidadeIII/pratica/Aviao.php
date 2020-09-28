<?php

class Aviao
{
    private $identificacao, $modelo, $companiaArea;
    public $voo;

    public function __construct()
    {
        $this->identificacao = "";
        $this->modelo = "";
        $this->companiaArea = "";
        $this->voo = array();
    }

    public function setAviao($identificacao, $modelo, $companiaArea){
        $this->identificacao = $identificacao;
        $this->modelo = $modelo;
        $this->companiaArea = $companiaArea;
    }

}