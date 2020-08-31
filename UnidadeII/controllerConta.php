<?php
require_once('classes/ContaCorrente.php');

$cliente1 = new ContaCorrente("3284-0","12456-8","José",1500.05,500.00);
$cliente1->depositar(500.25);
$results = $cliente1->exibirExtrato();
$cliente1->retirar(1000.25);
$results = $cliente1->exibirExtrato();
echo $results;

?>