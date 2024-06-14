<?php

$carros = array(
    12=>"Toyota",
    13=>"Honda",
    "Ford",
    "Chevrolet",
    "BMW",
    "Mercedes",
    "Audi"
);

print_r($carros);
echo "</br>";
echo "<hr>";
echo $carros[14];
echo "</br>";
echo "<hr>";
echo $carros[18];
echo "<hr>";

$carros[]= "Amarok";
$carros[9]= "Fusca";
$carros[8]= "BMW";

print_r($carros);
echo "</br>";
echo $carros[8];

?>