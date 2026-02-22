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

        require_once 'Banco.php';

        $p1 = new Banco();
        $p2 = new Banco();

        $p1->abrirConta("CC");
        $p1->setDono("JUBILEU");
        $p1->setNumConta(11);
        $p1->depositar(500);
        $p1->sacar(550);
        $p1->fecharConta();

        $p2->setNumConta(12);
        $p2->abrirConta("CP");
        $p2->setDono("CREUZA");
        $p2->depositar(600);
        $p2->sacar(750);
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);

        ?>
</pre>

</body>

</html>