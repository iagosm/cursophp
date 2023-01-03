<?php
//Sessão
session_start();
//verificar se existe a mensagem
if(isset($_SESSION['mensagem'])): ?>
    <script>
        //mensagem
    window.onload = function(){
        M.toast({html: '<?php  echo $_SESSION['mensagem']; ?>'})
    };
</script>
    <?php
endif;
//limpar sessão dps de atualizar a mensagem
session_unset();
?>