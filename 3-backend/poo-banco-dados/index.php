<?php

session_start();

require_once 'Conta-banco.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar-conta</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    #info {
        text-align: center;
        margin: 20px;
    }
</style>

<body>

    <form action="" method="post">

        <div id="titulo">
            <h1>CRIAR CONTA BANCÁRIA</h1>
        </div>

        <div id="nome">
            <input type="text" name="nome" placeholder="Nome:">
        </div>

        <div id="botao">
            <button type="submit" name="criar">Criar conta</button>
            <button type="submit" name="proximo">Saque e Deposito</button>
        </div>

        <div id="info">
            <?php

            if (isset($_REQUEST['criar'])) {

                $p1 = new ContaBanco($_REQUEST['nome']);

                $p1->abrirConta();

                $_SESSION['nome'] = $p1;
            }

            if (isset($_REQUEST['proximo'])) {

                header("location: saque-deposito.php");

                exit();
            }

            ?>
        </div>

    </form>

</body>

</html>