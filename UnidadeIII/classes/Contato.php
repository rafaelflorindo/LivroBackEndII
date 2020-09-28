<?php

class Contato
{
    public $telefone, $email;

    public function __construct()
    {
        $this->telefone="";
        $this->email="";
    }
    public function setContato($telefone, $email)
    {
        $this->telefone=$telefone;
        $this->email=$email;
    }
    public function getContato()
    {
        return json_encode(
            [
                "Telefone"=>$this->telefone, 
                "E-mail"=>$this->email
            ]
        );
    }
}