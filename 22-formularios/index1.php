<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario simples</title>
</head>
<style>
    *{
        margin: 0px;
        padding:0px;
    }
    button{
        background:red;
        padding:10px;
        cursor: pointer;
    }
    
</style>
<body>
<?php
/** Validações
 * Funções ( filter_input - filter_var)
 * FILTER_VALIDATE_INT
 * FILTER_VALIDADE_EMAIL
 * FILTER_VALIDATE_FLOAT
 * FILTER_VALIDATE_IP
 * FILTER_VALIDATE_URL
 */

*/



?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
Idade: <input type="text" name="nome"><br>
Email: <input type="email" name="email"><br>
<button type="submit">Enviar</button>
</form>


    <!-- action = será passado os dados desse formulario -->
    <!-- Post envia de forma invisivel -->
<!-- <form action="dados.php" method="POST">
Nome: <input type="text" name="nome"><br>
Email: <input type="email" name="email"><br>
<button type="submit">Enviar</button> -->

<!-- Utilizando method Get -->
<!-- Todas as informações são passadas atraves de parametros URL -->
<!-- <form action="dados.php" method="GET">
Nome: <input type="text" name="nome"><br>
Email: <input type="email" name="email"><br>
<button type="submit">Enviar</button>
</form> -->
<!-- <a href="dados.php?idade=25&sobrenome=Santos">Enviar Dados!</a> -->


</body>
</html>