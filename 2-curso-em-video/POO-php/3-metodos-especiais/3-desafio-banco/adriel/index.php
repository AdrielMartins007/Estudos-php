<html>
<pre>

    <?php

    require_once 'Conta-banco.php';

    $p1 = new contaBanco("ADRIEL");
    $p1->abrirConta();
    $p1->setCorrente();
    $p1->deposito(200);
    $p1->saque(100);
    $p1->saque(150);
    $p1->fecharConta();

    print_r($p1);

    echo "<br><br>OUTRA CONTA: <br><br>";

    $p2 = new contaBanco("THAIS");
    $p2->abrirConta();
    $p2->setPoupanca();
    $p2->deposito(650);

    print_r($p2);

    ?>

    </pre>

</html>