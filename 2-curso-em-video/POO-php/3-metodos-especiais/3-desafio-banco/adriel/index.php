<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <pre>

    <?php

    require_once 'Conta-banco.php';

    $p1 = new contaBanco();
    $p1->setDono("ADRIEL");
    $p1->abrirConta();
    $p1->deposito(1000);
    $p1->saque(350);

    print_r($p1);


    ?>

    </pre>

</body>

</html>