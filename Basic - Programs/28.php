<?php

// number_format = formata número armazenados, para apresentação.
$db = 1234.56;
$preco= number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";
echo "</br>";
echo"<hr>";


// round =  arredonda valores - arredonda pra cima e para baixo
echo round(43.40);
echo "</br>";
echo"<hr>";



// ceil = arredonda valores para cima
echo ceil(5.10);
echo "</br>";
echo"<hr>";



// floor = arredonda para baixo
echo floor(99.9);
echo "</br>";
echo"<hr>";



// rand = gera valores aleatorios dentro dos números passados abaixo
echo rand(1,20);
?>