<?php 
//Manipulação de arquivo 
/**
 * fopen()
 * fclose()
 * fwrite()
 * !feof()
 * fgets()
 * filesize
 */

$arquivo = 'arquivo.txt';
$conteudo = "Conteudo de Teste\r\n";
$tamanhoArquivo = filesize($arquivo);

// modo A = somente escrito
//Modo R = somente leitura

$arquivoAberto = fopen($arquivo, 'r');
//arquivo tem 4 linhas e como vamos fazer para percorrer =
//feof = até o final do arquivo
//enquato n for o final do arquivo
while(!feof($arquivoAberto)):
    //fgets = pegar conteudo de cada linha
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha."<br>";

endwhile;


// fwrite($arquivoAberto, $conteudo);

fclose($arquivoAberto);
?>