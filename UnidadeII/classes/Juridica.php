<?php
require_once('Pessoa.php');
class Juridica extends Pessoa
{
    private $razaoSocial, $cnpj;
    function __construct($razaoSocial, $cnpj, $endereco, $email, $dataCadastro)
    {
        parent::__construct($endereco, $email, $dataCadastro);
        $this->setRazaoSocial($razaoSocial);
        $this->setCnpj($cnpj);
    }
    private function setRazaoSocial($razaoSocial):bool{
        if(is_string($razaoSocial)){
            $this->razaoSocial = $razaoSocial;
            return true;
        } 
        else return false;
    }
    private function setCnpj($cnpj):bool{
        if(is_string($cnpj) && (strlen($cnpj)==14)){
            $this->cnpj = $cnpj;
            return true;
        } 
        else return false;        
    }
}

?>