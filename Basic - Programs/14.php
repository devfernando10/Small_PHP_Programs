<?php

$timesBaianos = [
    'Esporte Clube Bahia',
    'Esporte Clube Vitória',
    'Esporte Clube Jacuipense',
    'Esporte Clube Bahia de Feira',
    'Fluminense de Feira Futebol Clube'
];


$timesCariocas = [
    'Flamengo',
    'Fluminense',
    'Botafogo',
    'Vasco da Gama',
    'Bangu'
];
/// EXCLUI O PRIMEIRO INDICE DO ARRAY

// echo array_shift($timesCariocas). "</br>";
// print_r($timesCariocas);



/// ACRESCENTA VALORES NO INICIO DO ARRAY

// print_r($timesCariocas);
// echo"</br>";
// echo"</br>";
array_unshift($timesCariocas, "America", "Volta Redonda");
print_r($timesCariocas);
echo"</br>";
echo"</br>";


/// ACRESCENTA VALORES NO FINAL DO ARRAY

array_push($timesCariocas, "Desportivo", "Portuguesa");
print_r($timesCariocas);

?>