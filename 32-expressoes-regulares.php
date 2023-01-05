<?php
//Expressões Regulares
//Define um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras.
// ^ inicio da expressão, $ final da expressão - /i - case sensitive
// [] conjunto de caracteres
// {} ocorrencias - ?{0,1} *
// /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
//[A-Z] Letras Maisculas.
//[a-z] Letras minusculas
//[A-Za-z] Letras Maiúsculas e minúsculas.
// [A-Za-z0-9]lETRAS E NUMEROS


$string = "Q";
$padrao = "/^[a-z]$/";

if(preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;
?>