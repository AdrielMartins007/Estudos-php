<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="cadastro.php" method="get"> <!-- CRIAÇÃO DE UM FORMULARIO COM O METHOD: GEST E ACTION: 'cadastro.php', ESSE ACTION É PRA ONDE OS VALORES DO FORMULARIO VAO, O OUTRO ARQUIVO PHP-->

        <div>
            <label for="nome">Nome:</label> <!-- CRIAÇÃO DO LABEL PARA DAR A LIGAÇÃO COM O INPUT -->
            <input type="text" name="nome" id="nome"> <!-- INPUT COM O NAME: 'nome', ESSE NAME É O VALOR DO INPUT QUE VAI SER MANDADO PARA O SERVIDOR -->
        </div>

        <div>
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome">
        </div>

        <input type="submit" value="Enviar" id="botao"> <!-- BOTAO PARA O ENVIO DOS VALORES -->

    </form>

</body>

</html>