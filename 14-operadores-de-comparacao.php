<?php
//Operadores de comparação.
// ==
// !=
// ===
// !===
// <>
// <
// >
// <=
// >=
// <=>

if(10 == "10"):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

// != Não igual!
if(10 != "10"):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";
// === Operador de identidade. Tem q ser identico para ser positivo
if(10 === "10"):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

// !== Não identico
if(10 !== 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

// <> Diferente = 10 é diferente de 11? Positivo
if(10 <> 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

// < Menor que
if(10 < 9):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

// > Maior que
if(10 > 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

// >= maior igual
if(10 >= 1):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

// <= menor igual
if(6 <= 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//Space Chip = Só pode retornar 3 valores.
//Se o lado esquerdo for menor, ele retorna menos 1
//se o lado direto for menor ele retorna 1
//Se for igual, ele retorna 0
var_dump(20 <=> 20);
// if(10 <=> "10"):
//     echo "Positivo";
// else:
//     echo "Negativo";
// endif;
// echo "<hr>";
?>