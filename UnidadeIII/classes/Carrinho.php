<?php

class Carrinho
{
    public $itens;

    public function __construct()
    {
        $this->itens = array();

    }
    public function adicionarItem(Produto $itens)
    {
        $this->itens[] = $itens;
    }
    public function exibirLista()
    {
        return $this->itens;
    }
    public function calcularTotalCarrinho():float
    {
        $total = 0;
        for($i = 0; $i < count($this->itens); $i++){
            $total += $this->itens[$i]->preco;
        }
        return $total;
    }
}