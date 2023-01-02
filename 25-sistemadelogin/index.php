<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])): //se existir o indice "btn-entrar" na global post
    $erros = array(); //Criando array se houver algum erro, irá atribuir ao array exibir la embaixo
    //Pegar o login e a senha do usuario
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    //Verificar se o campo está vazio
    if(empty($login) or empty($senha)):
        $erros[] = "<li> o campo login/senha precisa ser preenchido </li>";
    else:
        //verificar se o login existe na base de dados
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        //resultado da consulta
        $resultado = mysqli_query($connect, $sql);
        $senha = md5($senha);//criptografar a senha
        //verificar se o numero de linhas é maior do q 0. Se houver algum registro
        if(mysqli_num_rows($resultado) > 0):
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' ";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1 ):
                // vai converter o resultado em um array e atribuir a uma variavel dados
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            else:
                $erros[] = "<li> Usuário e senha não conferem </li>";
            endif;
        else:
            $erros[] = "<li> Usuário inexistente </li>";
        endif;
    endif;

endif;

?>

<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Logim</title>
</head>
<body>

    <h1>Login</h1>
    <?php 
    if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
    endif;

    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Login: <input type="text" name="login" id=""><br>
Senha: <input type="password" name="senha" id=""><br>
<button type="submit" name="btn-entrar"> Entrar </button>
    </form>
</body>
</html>