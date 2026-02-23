<?php

require_once 'conexao.php';

$sql = "SELECT * FROM usuarios";

$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <form>

        <?php while ($linha = mysqli_fetch_assoc($resultado)) { ?>

            <h2>Nome: <?= $linha['nome'] ?></h2>
            <h2>Email: <?= $linha['email'] ?></h2>
            <h2>Senha: <?= $linha['senha'] ?></h2>

            <hr>

        <?php } 
        
        ?>

    </form>

</body>

</html>