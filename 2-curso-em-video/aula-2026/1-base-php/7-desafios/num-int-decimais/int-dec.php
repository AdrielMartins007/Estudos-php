<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>RESULTADO NUMEROS INTEIROS E DECIMAIS</h1>

        <?php

        $numero = floatval($_REQUEST["numero"]);

        $int = (int) $numero; /* TRANSFORMANDO O NUMERO EM IT, PELA COERSÃO */
        $dec = $numero - $int; /* PEGANDO O NUMERO E DIMINUINDO PELO VALOR INTEIRO */

        echo "O numero: <strong>$numero</strong><br><br>Tem o valor inteiro: <strong>$int</strong><br>Tem o valor decimal: <strong>" . number_format($dec,3) . "</strong><br><br>"

        ?>

        <button onclick="window.location.href='index.php'">Voltar</button>
    </main>

</body>

</html>