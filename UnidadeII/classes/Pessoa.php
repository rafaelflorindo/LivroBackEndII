<?php
abstract class Pessoa
{
    protected $nome, $endereco, $email, $dataCadastro;

    function __construct($nome, $endereco, $email, $dataCadastro)
    {
        $this->setNome($nome);
        $this->setEndereco($endereco);
        $this->setEmail($email);
        $this->setDataCadastro($dataCadastro);
    }

    private function setNome($nome):bool{
        if(is_string($nome)){
            $this->nome = $nome;
            return true;
        } 
        else return false;
    }

    private function setEndereco($endereco):bool{
        if(is_string($endereco)){
            $this->endereco = $endereco;
            return true;
        } 
        else return false;
    }
    private function setEmail($email):bool{
        if(is_string($email)){
            $this->email = $email;
            return true;
        } 
        else return false;
    }
    private function setDataCadastro($dataCadastro):bool{
        if(is_string($dataCadastro)){
            $this->dataCadastro = $dataCadastro;
            return true;
        } 
        else return false;
    }
    abstract public function exibirDados();
   /*     
    public function getEndereco():string{
        return $this->endereco;
    }
    public function getEmail():string{
        return $this->email;
    }
    public function getDataCadastro():string{
        return $this->dataCadastro;
    }*/
}

?>