<?php
require_once('Pessoa.php');
class Fisica extends Pessoa
{
    private $nome, $cpf;
    function __construct($nome, $cpf, $endereco, $email, $dataCadastro)
    {
        parent::__construct($endereco, $email, $dataCadastro);
        $this->setNome($nome);
        $this->setCpf($cpf);
    }
    private function setNome($nome):bool{
        if(is_string($nome)){
            $this->nome = $nome;
            return true;
        } 
        else return false;
    }
    private function setCpf($cpf):bool{
        if(is_string($cpf) && (strlen($cpf)==11)){
            $this->cpf = $cpf;
            return true;
        } 
        else return false;        
    }
}

?>