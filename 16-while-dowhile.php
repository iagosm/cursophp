<?php
// While & Do While = Estrutura de repetição
//while = enquanto
echo "<h1>While = Enquanto</h1>";
$contador = 1;
//Enquanto for 10 ele vai executar, passando de 10 ele para
while($contador <=10):
    echo "Contador é $contador <br>";
    $contador++;
endwhile;

echo "<hr>";

echo "<h1>doWhile = Faça Enquanto</h1>";
//do = faça
// No Do While ele executa o trecho de codigo e depois faz a verificação se é verdadeira ou não
$contador = 1;
do {

    echo "Contador é $contador <br>";
    $contador++;
} while ($contador <= 10);


?>