<?php

require_once('classes/Ator.php');
require_once('classes/Atua.php');
require_once('classes/Filme.php');

$ator1 = new Ator("Rafael A. Florindo");
$ator2 = new Ator("Carlos Danilo Luz");

$filme1 = new Filme("Armagedon");
$filme2 = new Filme("AWAY");

$atua = array();

$ator1Atua = new Atua();
$ator1Atua->setAtua($filme1, $ator1, "Cinegrafista");
$atua[] = $ator1Atua;

$ator2Atua = new Atua();
$ator2Atua->setAtua($filme1, $ator2, "Dramaturgico");
$atua[] = $ator2Atua;

print_r($ator1);
print_r($atua);