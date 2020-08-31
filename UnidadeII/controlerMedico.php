<?php
require_once('classes/Medico.php');

$medico = new Medico("Rafael Florindo",  "Rua 1", "rafaelflorindo@emai.com", "2010-05-24", "ctps 123", 4500.85, "CRM 45789");
$results = $medico->exibirDados();
echo $results;

$medico->aumentoSalario(1200.25);
echo "Novo Salário: " . $medico->getSalario();
?>