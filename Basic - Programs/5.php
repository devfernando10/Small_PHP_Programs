<?php

$nome= "Fernando";

var_dump($nome);
echo "</br>";
if (is_string($nome)){
    echo "é uma string";
}else echo "não é uma string";
echo"<hr>";

$numero= 15;

var_dump($numero);
echo "</br>";

if(is_int($numero)){
    echo "um inteiro";
} else{
    echo "não é inteiro";
}
echo"<hr>";

$altura= 1.90;
var_dump($altura);
echo "</br>";

if(is_float($altura)){
    echo "È uma variavel float";
}else{
    echo "Não é uma variavel float";
}
echo"<hr>";

$admin= false;
var_dump($admin);
echo "</br>";

if(is_bool($admin)){
    echo "È boleano";
}else{
    echo "Não é um boleano";
}

echo "</br>";
$carros= array("MARCA" => "GOl, fusca, bolinha, mercedez, ". $nome, "ANO DO VEICULO" => 15, "VALOR DO VCEICULO" => 37.6, 67);

var_dump($carros);
echo"<hr>";

 class Cliente{
     public $nome;
     public function atribuirNome($nome){
        $this->$nome = $nome;  
     }
}

$cliente= new Cliente();
$cliente-> atribuirNome("Santana");
var_dump($cliente);

echo "</br>";

if(is_object($cliente)){
    echo "È um objeto";
}else{
    echo "Não é um objeto";
}
echo"<hr>";

$cidade= null;
var_dump($cidade);

?>