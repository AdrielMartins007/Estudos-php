<?php

session_start();

require_once 'Conta-banco.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta bancaria</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="" method="post" id="primeira">

        <div class="titulo">
            <h1>CONTA BANCÁRIA</h1>
        </div>

        <div id="nome">
            <input type="text" name="nome" placeholder="Nome">
        </div>

        <div id="conta">
            <input type="radio" name="poupanca">POUPANÇA
            <input type="radio" name="corrente">CORRENTE
        </div>

        <div id="botao">
            <input type="submit" name="criar" id="btnCriar" value="Criar conta">
            <button type="button" onclick="mudar()" id="btn-saque">Saque ou deposito</button>
        </div>

    </form>

    <form id="segunda" method="post">

        <div id="saq-dep">
            <input type="Number" placeholder="Saque" name="saque">
            <input type="Number" placeholder="Depósito" name="deposito">
        </div>

        <div id="btn">
            <input type="submit" value="Mandar" name="enviar">
        </div>

    </form>

    <form id="tela-info">

        <div>

            <div class="titulo">
                <h1>INFORMAÇÕES</h1>
            </div>

            <?php

            if (isset($_REQUEST['criar'])) {

                $p1 = new contaBanco($_REQUEST['nome']);
                $p1->abrirConta();

                if (isset($_REQUEST['poupanca'])) {

                    $p1->setPoupanca();
                    $p1->mostrarSaldo();
                } else if (isset($_REQUEST['corrente'])) {

                    $p1->setCorrente();
                    $p1->mostrarSaldo();
                }

                $_SESSION['conta'] = $p1;
            }

            if (isset($_REQUEST['enviar'])) {

                if (isset($_SESSION['conta'])) {

                    $p1 = $_SESSION['conta'];

                    if (!empty($_REQUEST['saque'])) {

                        $p1->saque($_REQUEST['saque']);
                    }

                    if (!empty($_REQUEST['deposito'])) {

                        $p1->deposito($_REQUEST['deposito']);
                    }

                    $p1->mostrarSaldo();

                    $_SESSION['conta'] = $p1;
                } else {

                    echo "CRIE UMA CONTA PRIMEIRO<br>";
                }
            }

            ?>

        </div>

    </form>

    <script>
        function mudar() {
            var primeira = document.getElementById('primeira')
            var segunda = document.getElementById('segunda')

            primeira.style.display = 'none'
            segunda.style.display = 'block'
        }
    </script>

</body>

</html>