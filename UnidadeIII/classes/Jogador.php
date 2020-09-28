<?php

class Jogador
{
    private $codigo, $nome, $codigoCapitao;

    public function __construct($codigo, $nome)
    {
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->codigoCapitao=null;
    }
    public function __toString()
    {
        $dados = [
            "codigo"=>$this->getCodigo(),
            "nome"=>$this->getNome(), 
            "Capitao"=>$this->getCodigoCapitao()
        ];
        return json_encode($dados);
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getCodigoCapitao()
    {
        return $this->codigoCapitao->getNome();
    }
    public function setCodigoCapitao(Jogador $codigoCapitao)
    {
        $this->codigoCapitao = $codigoCapitao;
    }
}