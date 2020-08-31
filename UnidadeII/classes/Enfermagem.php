<?php
require_once('Funcionario.php');
class Enfermagem extends Funcionario{
    protected $coren;
    function __construct($nome, $endereco, $email, $dataCadastro, $ctps, $salario, $coren)
    {
        parent::__construct($nome, $endereco, $email, $dataCadastro, $ctps, $salario);
        $this->setCoren($coren);
    }
    private function setCoren($coren):bool{
        if(is_string($coren)){
            $this->coren = $coren;
            return true;
        } 
        else return false;        
    }
    public function exibirDados(){
        $dados = ["nome"=>$this->nome, 
            "endereco"=>$this->endereco, 
            "email"=>$this->email, 
            "ctps"=>$this->ctps, 
            "coren"=>$this->coren, 
            "salario"=>$this->salario,
            "dataCadastro"=>$this->dataCadastro
        ];
        return json_encode($dados);
    }
    public function aumentoSalario($valor):bool{
        if(parent::aumentoSalario($valor))
            return true;
        else
            return false;
    }
    public function getSalario(){
        return $this->salario;
    }
}
?>