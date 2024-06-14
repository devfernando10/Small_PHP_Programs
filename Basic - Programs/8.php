<?php
$sobrenome= "Santana";

define("NOME", "Fernando ".$sobrenome);
define("IDADE", 24);
define("ALTURA", 1.90);
define("CASADO", true);
echo NOME. PHP_EOL."</br>";
echo IDADE."</br>";
echo ALTURA."</br>";
echo CASADO."</br>";
echo "<hr>";

define("EU", ['vasco', 'flamengo', 'santos', 'bahia', 'cruzeiro']);
echo EU [0];
echo "</br>";
echo "<hr>";

var_dump(NOME);
echo "</br>";
var_dump(EU);

echo "<hr>";


?>