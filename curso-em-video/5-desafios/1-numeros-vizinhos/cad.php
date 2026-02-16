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
        
        $numero = $_REQUEST["numero"] ?? 0; /* COMANDO PARA PEGAR O VALOR QUE O USUARIO ESCREVER MO INPUT. SE CASO NAO ESCREVER NADA, É MANDADO O VALOR 0*/
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        
        echo "<h2>O numero que vc escolheu é $numero<h2>";

        echo "<h2>O antecessor é: $antecessor<h2>";

        echo "<h2>O sucessor é: $sucessor<h2>";
        
        ?>

        <button onclick="location.href = 'index.php'">
            Voltar
        </button>

    </main>

</body>

</html>