<?php 
// Operadores lógicos
// Nos permitem fazer comparações entre expressões
// e (&& - and)
// ou ( || - or )
// ou exclusivo ( xor )
// negação (!)

$idade = 25;
$nome = "Rodrigo";

//ambos tem que está certos
if(($idade == 25) and ($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";

//verdadeiro pq um deles está certo
if(($idade == 26) or ($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";

// só vai retornar verdadeiro se apenas uma estiver certa
if(($idade == 25) xor ($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";
?>