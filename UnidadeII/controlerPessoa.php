<?php
require_once('classes/Fisica.php');

$pessoaFisica = new Fisica("Rafael Florindo", "12345678909", "Rua 1", "rafaelflorindo@emai.com", "2010-05-24");
//print_r($pessoaFisica);
$dados = $pessoaFisica->exibirDados();
echo $dados;

?>