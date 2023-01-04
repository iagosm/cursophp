<?php 

//Datas
date_default_timezone_set('America/Sao_Paulo');
echo date('l d/m/Y H:i:s A');
//como armazenar a data no banco de dados 
echo "<hr>";
//Banco de dados usa duas colunas para armazenar datas. Date e DateTime

$date = date('Y-m-d');//DATE
echo $date."<br>";
$datetime = date('Y-m-d H:i:s');
echo $datetime."<hr>";


//Função Time = retorna quantidade de segundos que passaram desde 1970 até agr
echo time()."<br>";

//MKTIME
$data_pagamento = mktime(15, 30, 00, 01, 04, 2023);
echo date('d/m - h:i')."<br>";

//STRTOTIME
$data1 = '2019-04-10 13:30:00';

$data1 = strtotime($data1);

echo date('d/m/Y', $data1);