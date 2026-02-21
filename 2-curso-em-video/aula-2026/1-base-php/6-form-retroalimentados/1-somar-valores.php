<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Fomulários Retroalimentados</title>
</head>

<style>
    body{
        background-image: linear-gradient(to bottom, darkslategray, darkslategray);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 97vh;
    }

    form{
        background-color: white;
        width: 300px;
        height: 400px;
        display: flex;
        flex-direction: column;
        box-sizing: border-box;
        padding: 20px;
        text-align: center;
        border-radius: 20px;
        box-shadow: 0px 0px 5px black;
    }

    form .entrada{
        margin-bottom: 20px;
        margin-top: 20px;
    }

    form #botao{
        width: 80px;
        padding: 10px;
        margin: auto;
    }
</style>

<body>

    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get"> <!-- CODIGO QUE PERMITE QUE OS DADOS SEJAM ENVIADOS PARA A MESMA PAGINA, OU SEJA, 'PHP_SELF' SIGNIFICA PAGINA ATUAL -->

    <?php 

    $var1 = $_REQUEST["valor1"] ?? 0; /* RECEBENDO OS VALORES DENTRO DO INPUT */
    $var2 = $_REQUEST["valor2"] ?? 0;
    
    ?>

    <h1>SOMAR VALORES</h1>

    <div class="entrada">
        <label for="num1">Numero 1:</label>
        <input type="Number" name="valor1" value="<?=$var1?>"> <!-- COLOCANADO DENTRO DO INPUT O ULTIMO VALOR DA VARIAVEL QUE O USUARIO DIGITOU -->
    </div>

    <div class="entrada">
        <label for="num2">Numero 2:</label>
        <input type="Number" name="valor2" value="<?=$var2?>">
    </div>

    <input type="submit" value="somar" id="botao">

    <?php
    
    $resultado = $var1 + $var2; /* AQUI É ONDE A CONTA ESTA SENDO PROCESSADA E DEPOIS É EXIBIDA... */

    echo "$resultado";
    
    ?>

    </form>

</body>

</html>