<?php
// Funções para Números
/**
 * number_format = formata os numeros
 * round = arredonda os valores
 * ceil= arredonda valores pra cima
 * floor = arredonda sempre para baixo
 * rand = Função para sorteio
 */

$db = 1234.56;
//primeiro parametro é o numero. Segundo a casa decimal.Terceiro separador decimal e o ultimo é para milhares
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é $preco";
echo "<hr>";

//round
echo round(3.6);
echo "<hr>";

//ceil
echo ceil(5.10);
echo "<hr>";

//floor
echo floor(7.9);
echo "<hr>";

//rand
echo rand(1, 20)."<br>";
echo rand(1, 20)."<br>";
?>