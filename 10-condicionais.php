<?php
/*
* Condicionais
* If
* else
* elseif
*/

$numero = 10;

if($numero == 10):
    echo "É igual a 10";
elseif($numero <= 9):
    echo "É menor ou igual a 9";
else:
    echo "É diferente de 10";
endif;

//operador ternario = maneira mais simples de if e else

echo "<hr>";

$media = 6;

echo ($media >= 7) ? "Aprovado" : "Reprovado";
echo "<hr>";
/*
* Condicionais
* switch
* case
*/

$cor = "branco";

switch($cor): 
    case "vermelho":
        echo "Sua cor preferida é o vermelho";
    break;
    case "verde":
        echo "Sua cor preferida é verde";
    break;
    case "roxo":
        echo "Sua cor preferida é roxo";
        break;
        default:
        echo "Sua cor preferida não é vermelho, verde ou roxo.";

endswitch;

?>