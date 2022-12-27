<?php

// For = Para.
// Utilizado quando vc sabe antecipadamente o numero de repetições q vc precisa
echo "<h1>For - Usando para quando sabemos antecipadamente o numero de repetições</h1>";
for($contador = 0; $contador <= 10; $contador++):
    // echo "O contador é $contador <br>";
    //tabuada
    echo "8 x $contador = ".($contador*8)."<br>";
endfor;
echo "<hr>";

echo "<h1>Foreach = Para cada</h1>";
//Foreach - para cada
$cores = array("Verde", "Vermelho", "Azul", "Preto");

foreach($cores as $indice => $valor):
    echo $indice."-".$valor."<br>";
endforeach;
?>