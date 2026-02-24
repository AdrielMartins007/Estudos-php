<?php

session_start();

require_once 'Conta-banco.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    #info{
        text-align: center;
        margin: 20px;
    }
</style>

<body>

    <form action="" method="post">

        <div id="titulo">
            <h1>CONTA BANCÁRIA</h1>
        </div>

        <div id="nome">
            <input type="Number" name="valor" placeholder="Valor:">
        </div>

        <div id="botao">
            <button type="submit" name="saque">Saque</button>
            <button type="submit" name="deposito">Deposito</button>
        </div>

        <div id="info">

            <?php

            $nome = $_SESSION['nome'];

            $p1 = new ContaBanco($nome);

            if (isset($_REQUEST['saque'])) {

                $p1->sacar($_REQUEST['valor']);

            } else if (isset($_REQUEST['deposito'])) {

                $p1->depositar($_REQUEST['valor']);
            }

            ?>

        </div>

    </form>

</body>

</html>