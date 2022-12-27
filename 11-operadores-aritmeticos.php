<?php
/*
* Operadores Aritmeticos 
*
* São usados como valores numéricos para executar operações
* aritméticas comuns, como adição, subtração, multiplicação e etc.
*
* Adição+
* Subtração -
* Multiplicação *
* Divisão /
* Módulo %
* Exponenciação **
*/

echo 10 + 10," Adição";
echo "<hr>";
echo 15 - 5, " Subtração";
echo "<hr>";
echo 3 * 3, " Multiplicação";
echo "<hr>";
echo 15 / 5, " Divisão";
echo "<hr>";
echo 15 % 3, " Módulo";
echo "<hr>";
echo 3 ** 5, " Exponenciação";
echo "<hr>";

$a = 10;
$b = 20;
$c = 30;
$d = 5;
$e = 16;

$adicao = $a + $b;
echo $adicao;
echo "<hr>";

$subtracao = $c - $a;
echo $subtracao;
echo "<hr>";

$multiplicacao = $d * $a;
echo $multiplicacao;
echo "<hr>";

$divisao = $c / $a;
echo $divisao;
echo "<hr>";

$modulo = $e % $d;
echo $modulo;
echo "<hr>";

$expo = $a ** $d;
echo $expo;
echo "<hr>";

echo (5 + 7 + 9 + 8) / 4, " media de 4 numeros";
?>