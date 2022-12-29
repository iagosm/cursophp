<html>
<body>

<?php 
//Upload de arquivo
if(isset($_POST['enviar-formulario'])):
    $formatosPermitidos = array("png","jpeg","jpg","gif");
    //laço de repetição para poder enviar as fotos
    $quantidadeArquivos = count($_FILES['arquivo']['name']);
    $contador = 0;
    while($contador < $quantidadeArquivos):

    //para pegar a extensao do arquivo
    //precisamos adicionar o contador por causa do loop
    $extensao = pathinfo($_FILES['arquivo']['name'][$contador],PATHINFO_EXTENSION);
    

    if(in_array($extensao, $formatosPermitidos)):
        // echo "Existe!";
        //pasta que o arquivo ficará salvo
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'][$contador];
        //gerar um novo nome para o arquivo
        $novoNome = uniqid().".$extensao";

        //função para realizar o upload
        if(move_uploaded_file($temporario, $pasta.$novoNome)):
            echo  "Upload feito com sucesso para $pasta.$novoNome<br>";
        else:
            echo "Erro, não foi possivel fazer o upload do arquivo $temporario";
        endif;
    else:
        echo "$extensao não é permitida <br>";
    endif;
    
    
    // // var_dump($_FILES);

        //Arquivos multiplos = precisamos de um laço de repetição
$contador++;
  endwhile;

endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo[]" id="" multiple><br>
    <input type="submit" name="enviar-formulario">
</form>
    

</body>
</html>