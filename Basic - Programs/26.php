<?php

///trtoupper = deixa a string maiuscula

$nome= "fernando morais";
$novoNome= strtoupper($nome);
echo $novoNome;
echo "</br>";
echo"<hr>";



/// strtolower  deixa a string minuscula

$nomeMa= "FERNANDO MORAIS";
$novoMa2= strtolower($nomeMa);
echo $novoMa2;
echo "</br>";
echo"<hr>";



/// substr = trás determinado valor da string apartir do numero das caracteres

$mensagem= "Olá Mundo";
echo substr($mensagem, 4, 7);  //variavel da string;
                              //a partir de determinado caractere;
                             //após determinado caractere irá percorra (x) casas.
echo "</br>";
echo"<hr>";



/// tr_pad = acrescenta mais valores a string, antes, depois, pra direita, pra esquerda ou para ambos os lados
$objeto= "mouse";
$novoObjeto= str_pad($objeto, 10, "*");
echo $novoObjeto;
echo "</br>";
echo"<hr>";
$novoObjeto2= str_pad($objeto, 10, "*", STR_PAD_LEFT);
echo $novoObjeto2;
