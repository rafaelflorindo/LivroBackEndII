<?php
require_once('classes/Enfermagem.php');

$enfermagem = new Enfermagem("Rafael Florindo",  "Rua 1", "rafaelflorindo@emai.com", "2010-05-24", "ctps 123", 4500.85, "COREM 45789");
$results = $enfermagem->exibirDados();
echo $results;


$enfermagem->aumentoSalario(200.25);
echo "Novo Salário: " . $enfermagem->getSalario();
?>