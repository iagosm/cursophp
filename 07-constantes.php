<?php
//Constante
define("NOME", "José Carols");
//Nome sempre em letras Mai
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);

define("TIMES", ['vasco','flamengo','vitoria','fluminense']);

echo NOME.IDADE.ALTURA;
echo "<hr>";
echo TIMES[2];

function exibeNome(){
    echo NOME;
}

exibeNome();
?>