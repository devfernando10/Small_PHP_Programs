<?php

// str_repeat = repete por várias vezes o valor da string

$string= str_repeat("Sucesso"."</br>", 5);
echo $string;
echo "</br>";
echo"<hr>";



// strlen = trás a quantidade de caracteres de uma variavel string

$mensagem= "OLA MUNDO";
echo strlen($mensagem);
echo "</br>";
echo"<hr>";



// str_replace = trascreve um valor da string 

$texto= "A time Brasileira depende do Neymar, o brabo!";
$novoTexto= str_replace("time", "seleção", $texto);
echo $texto;
echo "</br>";
echo $novoTexto;
echo "</br>";



// strpos = pencontrar a posição da primeira ocorrência de uma substring dentro de uma string.
echo strpos($texto, "Neymar");

?>