<?php
/*Escalares*/
// string
$nome = "Olá mundo";
var_dump($nome);//essa função irá dar mais informações sobre a função
if(is_string($nome)):
    echo " = É uma String!";
else:
    echo " = Não é uma String";
endif;
echo "<hr>";

//int
$idade1 = 27;
var_dump($idade1);

if(is_int($idade1)):
    echo " = É um inteiro";
else:
    echo " = Não é um inteiro";
endif;
echo "<hr>";

//float
$altura = 1.87;
var_dump($altura);

if(is_float($altura)):
    echo " = É um float";
else:
    echo " = Não é um float";
endif;
echo "<hr>";

//boolean
$admin = false;
var_dump($admin);

if(is_bool($admin)):
    echo " = É um booleano";
else:
    echo " = Não é um booleano";
endif;
echo "<hr>";

/*Compostos*/
//Array
$carros = array("Gol","Uno","Camaro","Mercedes",12,20.6,true);
var_dump($carros);

if(is_array($carros)):
    echo " = É um array";
else:
    echo " = Não é um array";
endif;
echo "<hr>";

//Object
class Cliente {
    public $nome;
    public function atrubuirNome($nome){
        $this->$nome = $nome;
        echo $nome;
    }
}

$cliente = new Cliente();//agora é um objeto
$cliente->atrubuirNome("Iago");
var_dump($cliente);

if(is_object($cliente)):
    echo " = É um objeto";
else:
    echo " = Não é um objeto";
endif;
echo "<hr>";

/*Especiais*/
//NULL
$cidade = NULL;
var_dump($cidade);

// Resource = recursos externo banco de dados e manipulação de arquivos

?>