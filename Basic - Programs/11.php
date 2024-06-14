<?php

$nomes= array("fernando", "rodrigo", "geovanne", "pedro", "gabriel", "gael", "filipe");

echo is_array(var_dump($nomes));
echo"</br>";
echo "<hr>";
echo var_dump($nomes);
echo"</br>";echo "<hr>";
echo is_array($nomes);
echo"</br>";echo "<hr>";
echo var_dump(is_array($nomes));
echo "<hr>";
if (is_array($nomes)):
    echo "é um array";
else:
    echo "não é uma array";
endif;
echo "<hr>";



?>