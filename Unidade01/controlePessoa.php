<?php
require_once('classes/Pessoa.php');

$nome = "Rafael A. Florindo";
$email = "rafaelflorindo@hotmail.com";
$telefone = "44 3027-9390";
$dataNascimento = "2020-08-14";

$pessoa = new Pessoa($nome, $email, $telefone, $dataNascimento);
var_dump($pessoa);
unset($pessoa);

/*
echo "<div><strong>Dados da Pessoa</strong>";
$pessoa->getPessoa();
echo "</div";*/
?>