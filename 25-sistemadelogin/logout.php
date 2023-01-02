<?php
//encerrando a sessão
session_start();
session_unset();//limpar a sessão
session_destroy();
header('Location:index.php');