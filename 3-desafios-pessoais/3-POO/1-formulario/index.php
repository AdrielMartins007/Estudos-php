<?php

class Formulario{
    public $nome;
    public $email;
    public $senha;

    public function __construct($nome, $email, $senha){ /* CRIANDO A VARIAVEL DENTRO DO CONSTRUCT AONDE VAI RECEBER OS DADOS DO FORMULARIO */

        $this->nome = $nome; /* RECEBENDO OS DADOS E INCLUINDO DENTRO DAS VARIAVEIS QUE CRIAMOS, USANDO O NAME DENTRO DO FORM */
        $this->email = $email;
        $this->senha = $senha;

    }

    public function mensagem(){
        echo "Nome: " . $this->nome;
        echo "Email: " . $this->email;
        echo "Senha: " . $this->senha;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        background-image: linear-gradient(to bottom, rgb(73, 122, 122), darkslategray);
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    form {
        width: 60%;
        max-width: 600px;
        height: 60vh;
        background-color: white;
        border-radius: 20px;
        box-shadow: 0px 2px 8px black;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }

    form #titulo {
        margin: 10px;
        text-align: center;
        font-size: 20px;
    }

    form #entrada {
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    #entrada input {
        width: 80%;
        padding: 17px;
        margin: 10px auto;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 10px;
        font-size: 18px;
        border: 1px solid black;
    }

    form #botao {
        margin: 20px;
        display: flex;
        flex-direction: column;
    }

    #botao input {
        padding: 20px;
        width: 40%;
        margin: auto;
        font-size: 20px;
        border-radius: 20px;
        border: 1px solid black;
        cursor: pointer;
    }
</style>

<body>

    <form method="post">

        <div id="titulo">
            <h1>FORMULÁRIO</h1>
        </div>

        <div id="entrada">
            <input type="text" placeholder="Nome" name="nome">
            <input type="email" placeholder="Email" name="email">
            <input type="text" placeholder="Senha" name="senha">
        </div>

        <div id="botao">
            <input type="submit" value="Enviar" name="botao">
        </div>

    </form>

    <div id="info">
        <?php 

        if (isset($_REQUEST['botao'])){
            $p1 = new Formulario($_REQUEST['nome'], $_REQUEST['email'], $_REQUEST['senha']);
            $p1->mensagem();
        }
        
        ?>
    </div>

</body>

</html>