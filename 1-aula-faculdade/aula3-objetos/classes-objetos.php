<?php

class pessoa
{ /* CRIAÇÃO DA CLASSE PESSOA */
    public $nome; /* CRIAÇÃO DAS PROPRIEDADES DA CLASSE */
    public $idade;

    public function __construct($nome, $idade,) /* CHAMANDO A FUNCAO CONSTRUCT PARA INFORMAR OS VALORES DAS VARIAVEIS */
    {
        $this->nome = $nome; /* CHAMANDO AS VARIAVEIS, USANDO O THIS PARA CHAMAR AS PROPRIEDADES DAS VARIAVEIS E INCUIR OS VALORES DENTRO DELA */
        $this->idade = $idade;
    }

    public function mensagem() /* CRIANDO A FUNCAO DE MENSAGEM */
    {
        echo "<h3>Meu nome é $this->nome e tenho $this->idade anos<br><br>"; /* DECLARANDO A MENSAGEM E INCLUINDO AS PROPRIEDADES NELA ELA */
    }
}

$pessoa1 = new pessoa($_REQUEST['nome'], $_REQUEST['idade']); /* INCLUINDO VALORES DENTRO DAS VARIAVEIS */ /* CHAMANDO A FUNCAO DE MENSAGEM COM OS VALORES JA INCLUSO NELA */

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 97vh;
        background-image: linear-gradient(to bottom, rgb(81, 134, 134), darkslategray);
    }

    input {
        padding: 10px;
    }

    button {
        display: block;
        margin: 20px auto;
        padding: 10px;
    }

    #entrada{
        display: flex;
        flex-direction: column;
        margin: auto;
    }

    #entrada input{
        margin-bottom: 10px;
        border-radius: 10px;
        border: 1px solid black;
        text-align: center;
    }

    #mensagem{
        text-align: center;
    }

    form{
        display: flex;
        flex-direction: column;
        width: 340px;
        height: 300px;
        background-color: white;
        border-radius: 20px;
    }
</style>

<body>

    <form action="" method="post">

        <div id="entrada">
            <input type="text" name="nome" placeholder="nome">
            <input type="number" name="idade" placeholder="idade">
        </div>

        <button type="submit">enviar</button>

        <div id="mensagem">
            <?php

            $pessoa1->mensagem();

            ?>
        </div>

    </form>

</body>

</html>