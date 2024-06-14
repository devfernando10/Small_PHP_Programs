<?php


// LAÇO DE REPETIÇÃO

/// USANDO O FOR
for ($contador=0; $contador<=10; $contador++){
    echo "o contador é $contador"."</br>";
}
echo"<hr>";
for ($contador=0; $contador<=10; $contador++){
    echo "5x$contador= ". ($contador*5)."</br>";
}

echo"<hr>";


/// USANDO O FOREACH

$lutadoresUFC = [
    'Conor McGregor',
    'Khabib Nurmagomedov',
    'Jon Jones',
    'Israel Adesanya',
    'Stipe Miocic',
    'Kamaru Usman',
    'Francis Ngannou',
    'Dustin Poirier',
    'Max Holloway',
    'Amanda Nunes'
];

foreach($lutadoresUFC as $indice=> $valor){
    echo $indice." - ". $valor."</br>";
}
