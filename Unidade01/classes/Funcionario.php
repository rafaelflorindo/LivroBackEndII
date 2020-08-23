<?php
class Funcionario
{
    public $nome;
    private $email;
    protected $salario;

    function Funcionario()
    {

    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getSalario()
    {
        return $this->salario;
    }
}

?>