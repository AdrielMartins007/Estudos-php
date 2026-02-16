<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    h4{
        margin-top: 60px;
    }
</style>

<body>

    <main>

        <?php 
        
        $valor = floatval($_GET["valor"]); /* COMANDO FLOATVAL PARA PEGAR VALORES DECIMAIS E PODER CALCULAR */

        $resultado = $valor / 5.23; /* VALOR DE COTAÇÃO */

        echo "<h2>Valor digitado: $valor</h2>";

        echo "<h2>Valor em dolar: " . number_format($resultado, 2); /* FUNCAO PARA SOMENTE DOIS NUMEROS DEPOIS DA VIRGULA */
        
        ?>

        <h4>Valor do dolar atual: 5,23 Reais</h4>

        <button onclick="location.href = 'index.php'">
            Voltar
        </button>

    </main>

</body>

</html>