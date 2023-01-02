<?php 
// conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin1";

//Mysqli tem função para programação procedural e orientada a obj
//PDO só tem função para orientada a obj
$connect = mysqli_connect($servername, $username, $password, $db_name);

//verificar se existe algum erro
if(mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;

?>