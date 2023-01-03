<?php 

//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';

//mensagem
include_once 'includes/mensagem.php';
?>


<div class="row">
    <div class="col s12 m6 push-m3"> 
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>E-mail:</th>
                    <th>Idade:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);
                //Enquanto dados
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['sobrenome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['idade']; ?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</a></td>
                    <td><a href="" class="btn-floating red"><i class="material-icons">delete</a></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
        
    </div>
</div>


<?php
//Footer
include_once 'includes/footer.php';
?>



 