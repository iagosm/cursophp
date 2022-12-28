<?php 
//Criando Funções

function exibirNome($nome){
    echo "Meu nome é $nome";
}

exibirNome("Iago");
echo "<hr>";

//Função para calcular media

function calcularMedia($nome, $nota1, $nota2, $nota3, $nota4){
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    if($media >= 6):
        echo "O aluno $nome, está Aprovado com a $media.";
else:
        echo "O aluno $nome, está Reprovado com a $media";
endif;
}

calcularMedia("Iago", 7.8, 7, 5, 2.9);



?>