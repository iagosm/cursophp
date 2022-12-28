<?php 

// $nome = $_POST['nome'];
// $email = $_POST['email'];

// echo "Seu nome é $nome e seu E-mail é $email.  <br>";
// var_dump($_POST)

//GET
$nome = $_GET['nome'];
$email = $_GET['email'];

echo "Seu nome é $nome e seu E-mail é $email.  <br>";
var_dump($_GET);
echo "<hr>";

echo $_GET['idade']."<br>".$_GET['sobrenome'];
?>