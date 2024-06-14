<?php

///METODO PRA JUNTAR INDICES A VALORES


///VARIAVEL DOS INDICES
$apelidos = array(
    "cheirinho",
    "velho",
    "texter");


/// VARIAVEL DOS VALORES
$timesCariocas= array (
    "Flamengo",
    "Fluminense",
    "Botafogo");

$juncaoArrays= array_combine($apelidos, $timesCariocas);
print_r($juncaoArrays);


?>