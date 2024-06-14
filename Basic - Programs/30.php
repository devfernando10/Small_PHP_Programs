<?php

// $GLOBALS = Armazena todas as variáveis globais disponíveis no script, permitindo acesso a elas de qualquer lugar do código.
// $_SERVER = Contém informações sobre cabeçalhos, caminhos e localizações do script, incluindo detalhes do servidor e ambiente de execução.




// $GLOBALS
$x = 10;
$y= 15;

function soma(){
   echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();
echo "</br>";
echo"<hr>";


// $_SERVER
echo $_SERVER['PHP_SELF']."</br>";
echo $_SERVER['SERVER_NAME']."</br>";
echo $_SERVER['SCRIPT_FILENAME']."</br>";
echo $_SERVER['DOCUMENT_ROOT']."</br>";
echo $_SERVER['SERVER_PORT']."</br>";
echo $_SERVER['REMOTE_ADDR']."</br>";

?>