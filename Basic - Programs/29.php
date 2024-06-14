<?php


// function exibirNome(){
//     echo "Meu nome é Fernando";
// }

// exibirNome();

// echo "</br>";
// echo"<hr>";

// function segundoTest($nome){
//     echo "meu nome é $nome";
// }
// segundoTest("Fernando Santana");

// echo "</br>";
// echo"<hr>";

function calcularMedia($nome, $media1, $media2, $media3){
    $mediaf = intval($media1 + $media2 + $media3)/3;
    echo"meu nome é: $nome e minha média final foi de:".substr($mediaf, 0,3);
    echo "</br>";
    echo"<hr>";
    if($mediaf>=7){
        echo "parabéns vc foi aprovado!";
    }else{
        echo "infelizmente vc foi reprovado, irá fazer a recuperação!";
    }
    
}
calcularMedia("fernando", 6, 8, 8);
?>