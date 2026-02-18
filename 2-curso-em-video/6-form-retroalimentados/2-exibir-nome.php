<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome</title>
</head>

<body>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

        <?php

        $nome = $_REQUEST['nome'];

        ?>

        <input type="text" placeholder="SEU NOME" name="nome">

        <input type="submit" value="enviar">

        <?php
        echo "<br>seja bem vindo $nome";

        ?>

    </form>

</body>

</html>