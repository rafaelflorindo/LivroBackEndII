<?php

require_once('classes/Jogador.php');

$jogador1 = new Jogador(10, "Rafael");
$jogador2 = new Jogador(12, "Carlos");
$jogador3 = new Jogador(8, "Flávia");

$jogador1->setCodigoCapitao($jogador3);
$jogador2->setCodigoCapitao($jogador3);

echo $jogador2;

