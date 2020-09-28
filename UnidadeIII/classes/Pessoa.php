<?php

require_once('Contato.php');

class Pessoa
{
    public $codigo, $nome;
    public $contato;

    public function __construct()
    {
        $this->codigo=0;
        $this->nome="";
        $this->contato = new Contato();
    }
    public function setContato($codigo, $nome, $email, $telefone)
    {
        $this->codigo=$codigo;
        $this->nome=$nome;
        $this->contato->setContato($telefone, $email);
    }
    public function getContato()
    {
        return json_encode(
            [
                "Código"=>$this->codigo, 
                "Nome"=>$this->nome,
                "Contato"=>$this->contato
            ]
        );
    }
}