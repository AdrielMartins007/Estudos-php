<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    

    <form action="index.php" method="POST">
        <input type="text" placeholder="Nome" name="nome">
        <input type="Number" placeholder="Idade" name="idade">
        <input id="botao" type="submit">
    </form>

    <?php

    if ($_POST['idade'] >= 18) {
        echo "Olá " . trim($_POST['nome']) . ", Você é MAIOR de idade"; /* CODIGO PROTEGIDO CONTRA COMANDOS DENTRO DO INPUT MALICIOSOS */
    } else {
        echo "Olá " . trim($_POST['nome']) . ", Você é MENOR de idade";
    }

    ?>

    <!-- 

    COMANDO PARA PROTEGER O CODIGO CONTRA CODIGOS MALICIOSOS DENTRO DO INPUT: 
    htmlspecialchars()
    trim()
    strip_tags()

    -->

</body>

</html>