<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    form {
        text-align: center;
        width: 400px;
        height: 200px;
    }
</style>

<body>

    <form> <!-- ARQUIVO ONDE OS DADOS DO FORMULARIO SERÃO RECEBIDOS -->
        <h1>TELA DE BOAS VINDAS</h1>

        <?php

        $nome = $_GET["nome"] ?? "sem nome"; /* RECEBENDO OS VALORES DO INPUT COM O NAME: nome, E O METODO GET / O METODO MUDA DE ACORDO COM O METODO DO FORMULARIO CRIADO*/
        $sobre = $_GET["sobrenome"] ?? "sem nome";
        echo "<h3>Seja muito bem vindo $nome $sobre!...</h3>"; /* EXIBIÇÃO DOS VALORES DAS VARIAVEIS QUE RECEBERAM O VALOR DO INPUT DO FORMULARIO */

        ?>

        <a href="index.php">Voltar</a> <!-- BOTAO SIMPLES PARA VOLTAR -->

    </form>

</body>

</html>