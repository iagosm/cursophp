<?php 
//conexão com o banco de dados
$servername = "localhost";
$username = "root";
$passowrd = "";
$db_name = "sistemalogin";

//criando a conexão com o banco
//msqli = suporte programação procedural e orientada a objt
//pdo = somente a objt
$connect = mysqli_connect($servername, $username, $passowrd, $db_name);

if(mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;
?>