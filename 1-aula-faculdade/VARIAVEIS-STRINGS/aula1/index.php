<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>texto-php</title>
</head>

<body>

    <h1>Meu primeiro site php</h1><br>

    <?php /* Abrindo a tag para o php */

    $cor = "Preta"; /* criação de uma variavel 'cor' */
    $nome = "Adriel";
    $idade = 23; /* o php identifica a variavel, se caso vc colocar as aspas em um numero, ele entende como string, caso nao, entende como inteiro */
    

    $num1 = $num2 = $num3 = 25; /* PARA CRIAR VARIAS VARIAVEIS COM O MESMO VALOR */


    var_dump("Adriel"); echo"<br>"; /* PARA DESCOBRIR O TIPO DA VARIAVEL USA-SE O COMANDO 'var_dump()'*/
    var_dump(25);


    echo /* COMANDO PARA EXIBIÇÃO DE MENSAGEM */
    "<h2>Meu nome é : $nome </h2><br>
    <h2>Tenho : $idade anos</h2><br>
    <h2>Minha moto é da cor : $cor</h2>" /* incluindo variaveis e html dentro da mensagem 'echo' */

    ?>

</body>

</html>