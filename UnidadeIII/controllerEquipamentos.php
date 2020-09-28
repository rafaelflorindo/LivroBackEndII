<?php

require_once('classes/Equipamento.php');
require_once('classes/TipoEquipamento.php');

$midia = new TipoEquipamento(12, "Video");

$monitor1 = new Equipamento(10, "Monitor 15 pol.", date("d-m-Y"), $midia);
print_r($monitor1);
$monitor2 = new Equipamento(20, "Monitor 17 pol.", date("d-m-Y"), $midia);
$monitor3 = new Equipamento(30, "Monitor 21 pol.", date("d-m-Y"), $midia);
print_r($midia);

