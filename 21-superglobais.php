<?php 
//Superglobais

/**
 * $GLOBALS = variavel usada para acessar variaveis globals em qualquer parte do script. Armazena todas as variaveis em um array
 * $_SERVER = É uma superglobal que contem informação de locais, caminhos e scripts.
 * $_REQUEST
 * $_POST
 * $_GET
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 */

 //$GLOBALS
 $x = 10;
 $y = 15;

 function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
 }
soma();
echo "<hr>";

//$_SERVER
echo $_SERVER['PHP_SELF']."<br>"; // CAMINHO DO ARQUIVO
echo $_SERVER['SERVER_NAME']."<br>"; //NOME DO SERVIDOR
echo $_SERVER['SCRIPT_FILENAME']."<br>"; //CAMINHO ABSOLUTO DO SCRIPT
echo $_SERVER['DOCUMENT_ROOT']."<br>"; //Diretorio raiz do script
echo $_SERVER['SERVER_PORT']."<br>"; //PORTA DO SERVIDOR
echo $_SERVER['REMOTE_ADDR']."<br>"; // ENDEREÇO IP DE ONDE O USUARIO ESTÁ VENDO A PAGINA
echo "<hr>";

//$_POST && $_GET

?>