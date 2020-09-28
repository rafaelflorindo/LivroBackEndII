<?php

require_once("classes/Carrinho.php");
require_once("classes/Produto.php");

$produto1 = new Produto(12, "Arroz", 25.78, 104);
$produto2 = new Produto(2, "Feijão", 5.78, 1400);
$produto3 = new Produto(125, "Café", 9.78, 714);

$carrinhoJunior = new Carrinho();
$carrinhoJunior->adicionarItem($produto1);
$carrinhoJunior->adicionarItem($produto2);
$carrinhoJunior->adicionarItem($produto3);

$results = $carrinhoJunior->exibirLista();
print_r($results);
echo "Total: " . $carrinhoJunior->calcularTotalCarrinho();