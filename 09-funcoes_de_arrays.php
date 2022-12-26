<?php 
/*
* is_array($array) = verificar se uma determinada variavel é um array
* in_array($valor, $array) = verifica se um determinado valor com os valores do array passado como parâmetro
* array_key($array) = returna um novo array com as chaves do array passado como parâmetro
* array_values($array) = retorna um novo array com os valores do array passado como parametro
* array_merge($array1,$array2) = agrega o conteudo dos dois arrays
* array_pop($array) = exclui a ultima posição do array
* array_shift($array) = exclui a primeira posição do array
* array_unshift($arr, "valor") = adiciona um ou mais elementos no inicio de um array
* array_push($array,"valor", "valor") = adiciona um ou mais elementos no final de um array
* array_combine($keys, $values) = mescla os dois arrays passados
* array_sum() = calcula a soma dos elementos de um array
* explode("/","20/01/2001") = transforma string em array
* implode("-", $arr) = transforma um  array em string
*/

//Is_array
$nomes = array("Primo"=>"Rodrigo","Vizinho"=> "Felipe","Esposa"=> "Maria","Pai"=> "José");

var_dump(is_array($nomes));

if(is_array($nomes))://se nomes for um array
    echo "é um array!";
else:
    echo "Não é um array!";
endif;
echo "<hr>";
//in_array = verifica se o valor existe em alguma posição do array
in_array("Rodrigo", $nomes); //retornou 1 como verdadeiro, se n retornar nd é falso
if (in_array("Felipe", $nomes)):
    echo "Contem no Array";
else: 
    echo "Não contem no array";
endif;
echo "<hr>";

//array_keys
$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";

//array values
$values = array_values($nomes);
print_r($values);
echo "<hr>";

//array merge
$carros = array("camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");
$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

//Array pop
print_r($carros);
echo "<br>";
echo array_pop($carros);//exibir qual elemento está sendo excluido
echo "<br>";
print_r($carros);
echo "<hr>";

//Array Shift

print_r($carros);
echo "<br>";
echo array_shift($carros);//exibir qual elemento está sendo excluido
echo "<br>";
print_r($carros);
echo "<hr>";

//Array unshift
$frutas = array("Uva","Laranja", "Maçã");
print_r($frutas);
array_unshift($frutas, "Banana","Manga", "Morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

//Array push
array_push($frutas,"chocolate");
print_r($frutas);
echo "<hr>";

//Array combine
$keys = array("Campeão","Vice", "Terceiro");
$values = array("Vasco","Flamengo","Palmeiras");

$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

//array Sum
$soma = array(5,6,10,9);
$total = array_sum($soma);
echo $total;
echo "<hr>";

//Explode
$data = "30/06/2000";
$novaData = explode('/',$data);
print_r($novaData);
echo "<br>";
$frase = "Meu nome não é Johnny";
$array = explode(" ", $frase);
print_r($array);
echo "<br>";
$cpf = "423.214.123-12";
$novoCpf = explode('.', $cpf);
print_r($novoCpf);
echo "<hr>";

//Implode
$pessoas = array("Rodrigo","Matheus", "Lucas", "Neusa", "Talita");
$string = implode(", ", $pessoas);
echo $string;
?>
