<?php

/// EXPLODE TRASFORMA STRING EM ARRAY

// $data= "30/02/2018";
// echo $data;
// $novaData= explode("/", $data);
// echo"</br>";
// print_r($novaData);
// echo"</br>";
// echo"</br>";
// $frase= "Meu nome não é Pedro";
// echo $frase;
// echo"</br>";
// $novaFrase= explode(" ",$frase );
// print_r($novaFrase);




/// IMPLODE TRASFORMA ARRAY EM STRING

$array= [
    "Rodrigo",
    "Fernando",
    "Neto", 
    "Yuri"
];
print_r($array);
echo"</br>";
echo"</br>";
$string= implode(", ", $array);
echo $string;


?>