<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor dolar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>

        <form action="converter.php">

            <h1>CONVERSOR DE REAL PARA DOLAR($)</h1>

            <label for="valor">Valor R$:</label>
            <input type="Number" name="valor" step="0.01"> <!-- COMANDO PARA RECEBER VALORES EM DECIMAIS -->

            <div class="botao">
                <input type="submit" value="Enviar">
            </div>

        </form>

    </main>

</body>

</html>