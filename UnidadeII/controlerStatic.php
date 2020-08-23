<?php
include('classes/ExemploStatic.php');

echo "<br>Acessando direto o atributo " . ExemploStatic::$voltagem;

$teste = new ExemploStatic();
echo "<br>Acessando o atributo por meio da classe " . $teste->valorEstatico();