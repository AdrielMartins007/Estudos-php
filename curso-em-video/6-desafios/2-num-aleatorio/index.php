<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de numeros</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    button{
        margin-top: 30px;
    }
</style>

<body>

    <!-- 

    FORMAS DE GERAR NUMEROS ALEATORIOS

    rand()
    mt_rand() - MAIS RECOMENDADO PARA USAR
    random_int() - PARA GERAR NUMEROS ALEATORIOS CRIPTOGRAFICAMENTE SEGURO, POREM, É MAIS LENTO

    -->

    <main>

        <h1>GERANDO NUMEROS ALETÓRIOS (1 a 100)</h1>

        <?php

        $resul = mt_rand(0, 100);

        echo "gerando numero aleatorio entre 0 e 100...<br><br>";
        echo "o numero gerado é: <strong>$resul</strong><br>"

        ?>

        <button onclick="window.location.reload()"> <!-- COMANDO PARA ATUALIZAR A PAGINA, ASSIM, GERANDO UM NOVO NUMERO -->
            Gerar
        </button>
    </main>

</body>

</html>