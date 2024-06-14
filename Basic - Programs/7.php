<?php

$nome= "Fernando";
$a= 1;
$b= 3;
$c= 7;

function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();

echo "<hr>";

function exibeCidade(){
    global $cidade;
    $cidade = "Rio de Janeiro";
}
exibeCidade();
echo $cidade;

echo "<hr>";

function Soma(){
    global $a, $b, $c;
    echo $a + $b + $c;
}
Soma();
?>