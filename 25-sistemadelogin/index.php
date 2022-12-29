<?php 
// Conexão com o banco
require_once 'db_connect.php';

// Sessão
session_start();

//Botão enviar
if(isset($_POST['btn-entrar'])): //verificar se está funcionando o botão submit
    //array erros
    $erros = array(); //se houver algum erro, irá atribuir ao array e exibir lá embaixo
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

//se o campo login ou senha estiver vazio, ele irá atribuir ao array $erros[]
    if(empty($login) or empty($senha)):
        $erros[] = "<li>O campo Login/Senha precisa ser preenchido<li>";
    else:
   
    endif;
endif;
?>


<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: #4324;
        }
    </style>
</head>
<body>
    
<h1> Login </h1>
<?php 
//verificando se o array erros está vazio, se n tiver vai exibir
if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Login: <input type="text" name="login"><br><br>
Senha: <input type="passoword" name="senha"><br><br>
<button type="submit" name="btn-entrar"> Entrar </button>


</form>

</body>
</html>
