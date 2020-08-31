<?php
require_once('Pessoa.php');
class Funcionario extends Pessoa{
    protected $ctps, $salario;

    function __construct($nome, $endereco, $email, $dataCadastro, $ctps, $salario)
    {
        parent::__construct($nome, $endereco, $email, $dataCadastro);
        $this->setCtps($ctps);
        $this->setSalario($salario);

    }
    private function setCtps($ctps):bool{
        if(is_string($ctps)){
            $this->ctps = $ctps;
            return true;
        } 
        else return false;        
    }
    private function setSalario($salario):bool{
        if(is_float($salario)){
            $this->salario = $salario;
            return true;
        } 
        else return false;        
    }
    public function exibirDados(){

    }
    public function aumentoSalario($valor):bool{
        if(is_float($valor) > 0){
            $this->setSalario($this->salario + $valor);
            return true;
        }            
        else    
            return false;
    }
}
?>