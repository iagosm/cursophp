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
        /* margin: 0px; */
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
 * * 
 * Sanetização- filtros para limpar as variaveis
 *  Funções ( filter_input - filter_var)
 *  FILTER_SANITIZE_SPECIAL_CHARS
 * FILTER_SANITIZE_INT
 * FILTER_SANITIZE_EMAIL
 * FILTER_SANITIZE_URL
 * 
 */
?>

<?php 
//Verificar se o formulario foi preenchido e o o usuario clicou em enviar
if(isset($_POST['enviar-formulario'])): //se existe(ISSET) 
    //array de erros
    $erros = array();
    //Validações
    //verificar idade se é do tipo inteiro
    // if(!$idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT)):
    //    //Se idade n for um inteiro, vai atribuir ao array erro
    //     $erros[] = "Idade precisa ser inteiro";
    // endif;

    // if(!$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)):
    //     //Se idade n for um inteiro, vai atribuir ao array erro
    //      $erros[] = "E-mail inválido";
    //  endif;

    //  if(!$peso = filter_input(INPUT_POST, "peso", FILTER_VALIDATE_FLOAT)):
    //     //Se idade n for um inteiro, vai atribuir ao array erro
    //      $erros[] = "peso precisa ser um float";
    //  endif;

    //  if(!$ip = filter_input(INPUT_POST, "ip", FILTER_VALIDATE_IP)):
    //     //Se idade n for um inteiro, vai atribuir ao array erro
    //      $erros[] = "IP inválido";
    //  endif;

    //  if(!$url = filter_input(INPUT_POST, "url", FILTER_VALIDATE_URL)):
    //     //Se idade n for um inteiro, vai atribuir ao array erro
    //      $erros[] = "URL inválida";
    //  endif;


    // Sanitize
        $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($idade, FILTER_VALIDATE_INT)):
            $erros[] = "Idade precisa ser um numero inteiro";
        endif;

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)):
            $erros[] = "Digite um E-mail valido";
        endif;

        $url = filter_input(INPUT_POST, 'url',  FILTER_SANITIZE_URL);
        if(filter_var($url, FILTER_VALIDATE_URL)):
            $erros[] = "Url inválida";
        endif;

    // Exibindo mensagens
    if(!empty($erros))://se n estiver vazia
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Parabéns, seus dados estão corretos!";
    endif;

endif;

?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
Nome: <input type="text" name="nome"><br>
Idade: <input type="text" name="idade"><br>
Email: <input type="email" name="email"><br>
<!-- Peso: <input type="text" name="peso"><br> -->
<!-- IP: <input type="text" name="ip"><br> -->
URL: <input type="text" name="url"><br>
<button type="submit" name ="enviar-formulario">Enviar</button><br>
</form>



</body>
</html>