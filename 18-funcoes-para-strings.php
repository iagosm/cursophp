<?php
//Funções para Strings
/** stroupper = converte em maiuscula
 * strtolower = converte em minuscula
 * substr = retorna uma parte de uma string
 * str_pad = complementa uma outra string com quantidade especificada de caracteres
 * str_repeat 
 *  strlen
 *  str_replace
 *  strpos
 */

$nome = "iago sousa";
$nome1 = "IAGO SOUSA";
$novoNome = strtoupper($nome);
$novoNome1 = strtolower($nome1);
echo $novoNome1." To lower <br>";
echo $novoNome." To upper case";
echo "<hr>";

//substr
$mensagem = "Olá mundo!";
echo substr($mensagem, 4, 6);
echo "<br>";

// str_pad
$objeto = "mouse";
//STR_PAD_LEFT = joga para direita
// STR_PAD_BOTH = ele distribui entre os lados
$novoobjeto = str_pad($objeto, 17, "*", STR_PAD_BOTH);
echo $novoobjeto;

?>