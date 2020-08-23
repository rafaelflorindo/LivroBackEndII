<?php
require_once('classes/Funcionario.php');

$funcionario = new Funcionario();
$funcionario->setNome("Carlos Danilo");
$funcionario->setEmail("carlosdanilo@xxx.xx");
$funcionario->setSalario(4500.00);
var_dump($funcionario);

echo "<br>Nome: ".$funcionario->getNome();
echo "<br>E-mail: ".$funcionario->getEmail();
echo "<br>Salário: ".$funcionario->getSalario();

?>

object(Funcionario)#1 (3) {
  ["nome"]=>
  string(13) "Carlos Danilo"
  ["email":"Funcionario":private]=>
  string(19) "carlosdanilo@xxx.xx"
  ["salario":protected]=>
  float(4500)
}
Nome: Carlos Danilo
E-mail: carlosdanilo@xxx.xx
Salário: 4500 