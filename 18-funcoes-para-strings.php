<?php
//Funções para Strings
/** stroupper = converte em maiuscula
 * strtolower = converte em minuscula
 * substr = retorna uma parte de uma string
 * str_pad = complementa uma outra string com quantidade especificada de caracteres
 * str_repeat = ele repete varias vezes 
 *  strlen = serve para retornar comprimento de uma string
 *  str_replace = substituir uma plavra em um texto
 *  strpos = Retorna a posição de uma palavra em um texto
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
echo "<hr>";

//str_repeat
$string = str_repeat("Sucesso! <br>", 5);
echo $string;
echo "<hr>";

//srtlen
$men = "Olá mundo!";
echo strlen($men);
echo "<hr>";

//str_replace
$texto = "A seleção Argentina será campeã da copa do mundo de 2018";
//Primeiro vai a palavra que vc quer tirar, dps a que vc quer incluir.
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;
echo "<hr>";

//srtpos

echo strpos($texto, "copa")


?>