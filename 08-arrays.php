<?php
//Arrays numéricos
$carros = array("BMW","Hilux","Veloster");
$carros[] = "Amarok";
print_r($carros);
echo $carros[3];
echo "<br>";


$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[] = "Suzuki";
print_r($motos);
echo "<br>";

$clientes = ["Rodrigo","Felipe", "Bia"];
print_r($clientes);
echo "<hr>";

//Count = exibir quantidade de um elemento
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//Loop para percorrer arrays com Foreach
foreach($clientes as $valor){
    echo $valor."<br>";
}
echo "<hr>";

//arrays associativos = assosciativo quando indices ou chaves são strings
$pessoa = array("nome"=> "Rodrigo", "idade" => 23, "altura" => 1.75);
$pessoa["cidade"] = "Itabuna";
print_r($pessoa);
echo $pessoa["idade"];
echo "<hr>";

//Passar um foreach de indice e mostrando valor
foreach($pessoa as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo "<hr>";
//Array multidimensionais

$times = array(
    "cariocas"=> array("campeao"=>"vasco","vice"=>"flamengo","terceiro"=>"botafogo"),
    "paulistas"=>array("santos","sao paulo", "palmeiras"),
    "baianos"=> array("bahia","vitoria","itabuna"));

echo $times["paulistas"][1]."<br>";

//loop indice valor
foreach($times["cariocas"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo "<hr>";

//loop indice valor
foreach($times["paulistas"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo "<hr>";

//loop indice valor
foreach($times["baianos"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}

//loop valor
foreach($times["baianos"] as $valor){
    echo $valor."<br>";
}

?>