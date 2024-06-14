<?php

$carros = array(
    12 => "Toyota",
    13 => "Honda",
    "Ford",
    "Chevrolet",
    "BMW",
    "Mercedes",
    "Audi"
);

echo count($carros) . "</br>";
$totalMarcas = count($carros);
echo $totalMarcas . "</br>";
echo "<hr>";

foreach ($carros as $valor) {
    echo $valor . "</br>";
}
echo "<hr>";

$pessoa = array("nome" => "Fernando", "idade" => 19, "altura" => 1.90);
echo $pessoa["nome"] . "</br>";
echo $pessoa["idade"] . "</br>";
echo $pessoa["altura"] . "</br>";
echo "<hr>";
$pessoa["cidade"] = "Itabuna";
print_r($pessoa);
echo "</br>";
echo "<hr>";

foreach ($pessoa as $indice => $valor) {
    echo $indice . " : " . $valor . "</br>";
}
echo "<hr>";

/// ARRAYS MULTIDIMENSIONAIS

$times = array(
    "cariocas" => array(
        "fraco" => "vasco",
        "ganha" => "flamengo",
        "liberta" => "fluminense",
        "texter" => "botafogo",
        "BAIANOS" => array(
            "são paulo",
            "santos",
            "palmeiras",
            "portuguesa"
        ),

    ),




    "paulistas" => array("são paulo", "santos", "palmeiras", "portuguesa")
);
print_r($times["cariocas"]);
echo "</br>";
print_r($times["paulistas"]);
echo "<hr>";

foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice . " : " . $valor . "</br>";
}
