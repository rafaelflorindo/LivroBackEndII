<?php
require_once('classes/Cliente.php');

$paciente = new Cliente("Rafael Florindo",  "Rua 1", "rafaelflorindo@emai.com", "2010-05-24", "12345678909");
$results = $paciente->exibirDados();
echo $results;
?>