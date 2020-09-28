<?php

class Produto
{
    public $codigo, $descricao, $preco, $quantidade;

    public function __construct($codigo, $descricao, $preco, $quantidade)
    {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }
    public function __toString()
    {
        $dados = [
            "codigo"=>$this->codigo,
            "descricao"=>$this->descricao,
            "preco"=>$this->preco,
            "quantidade"=>$this->quantidade,
        ];
        return json_encode($dados);
    }
}