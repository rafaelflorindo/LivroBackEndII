<?php

require_once('classes/Pessoa.php');

$jose = new Pessoa();
$jose->setContato(10, "Jose de Abreu", "43 2568-7895", "jose@jsoe.com");

echo $jose->getContato();
