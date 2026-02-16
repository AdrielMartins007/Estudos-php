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

        <?php
        
        $numero = $_GET["numero"];
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        
        echo "<h3>O numero que vc escolheu é $numero<h3>";

        echo "<h3>O antecessor é: $antecessor<h3>";

        echo "<h3>O sucessor é: $sucessor<h3>";
        
        ?>

        <button onclick="location.href = 'index.php'">
            Voltar
        </button>

    </main>

</body>

</html>