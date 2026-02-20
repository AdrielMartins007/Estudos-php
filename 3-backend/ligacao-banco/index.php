<?php 

/* INCLUINDO O CODIGO DE CONEXAO DENTRO DA PAGINA PRINCIPAL */
require_once 'conexao.php';

/* 

EXISTEM 4 FORMAS DE INCLUIR O ARQUIVO DE CONEXÃO NA PAGINA PRINCIPAL

require
require_once
include
include_once

ESSE É O MAIS SEGURO PQ PRIMEIRO, SE CASO DER ERRO DE CONEXÃO ELE PARA O SISTEMA TODO E ELE SO CARREGA UMA VEZ OQ EVITA DUPLICIDATE DE CONEXÃO.

*/

/* ENVIANDO OS DADOS PARA O BANCO DE DADOS */

$nome = $_POST['nome']; /* CRIAÇÃO DAS VARIAVEIS QUE IRÁ RECEBER OS VALORES DO INPUT */
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')"; /* COMANDO SQL PARA ENVIO DOS DADOS DENTRO DO BANCO DE DADOS */

if(mysqli_query($conexao, $sql)){ /* VERIFICAÇÃO DA INCLUSÃO DOS DADOS NO BANCO DE DADOS */
    echo "CADASTRO REALIZADO COM SUCESSO!";
} else {
    echo "ERRO AO CADASTRAR: " . mysqli_error($conexao); /* SE CASODER ERRO, NOTIFICAR E MOSTRAR AONDE ESTÁ OS ERROS */
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Tela Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>FAÇA SEU CADASTRO</h1>

    <form action="" method="post">

        <div class="entrada">
            <label for="">Nome:</label>
            <input type="text" name="nome" required>
        </div>

        <div class="entrada">
            <label for="">Email:</label>
            <input type="email" name="email" required>
        </div>

        <div class="entrada">
            <label for="">Senha:</label>
            <input type="password" name="senha" required>
        </div>

        <div class="botoes">
            <button type="submit">Enviar</button>
            <button onclick="window.location.href='mostrar-dados.php'">Mostrar</button>
        </div>

    </form>

</body>

</html>