<?php

class Filme
{
    public $titulo;
    public $atua;

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->atua = array();
    }
}