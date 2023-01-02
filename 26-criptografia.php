<?php
$senha = "123456";
//base64 ele pode criptografar a senha ou encriptografar
$novasenha = base64_encode($senha);
echo "base64: ".$novasenha."<br>";
echo "Sua senha é ".base64_decode($novasenha);

echo "<hr>";

echo "MD5: ".md5($senha)."<br>";
echo "Sha1: ".sha1($senha)."<hr>";

//Senhas seguras com hash
$senha1 = "123456"."<br>";
$senha_db = '$2y$10$W0EI6GMOo6tTsH83IJm4G.3ycUs6J6fc3GxxuxvApARy2iBtNhVGC';

if(password_verify($senha1, $senha_db)):
    echo "Senha Válida";
else:
    echo "Senha invalida";
endif;

echo "<br>";

echo $senha1;
$senhaSegura = password_hash($senha1, PASSWORD_DEFAULT);
echo $senhaSegura;