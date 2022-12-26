<?php
//escopo global
$nome = "Rodrigo Oliveira";
$a = 1;
$b = 3;
$c = 7;


function exibeNome(){
    //escopo local
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

function exibeCidade(){
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";

function soma(){
    echo  $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
   soma();
?>