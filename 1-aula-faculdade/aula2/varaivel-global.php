<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>texto-php</title>
</head>

<body>

    <h1>Meu primeiro site php</h1><br>

    <?php

    $moto = "preta"; /* CRIAÇÃO DE UMA VARIAVEL GLOBAL */
    function nome(){ /* CRIAÇÃO DE UMA FUNÇÃO */

    global $moto;/* CHAMANDO A VARIAVEL GLOBAL */
    
        $outronome = "Adriel Martins"; /* CRIAÇÃO DE UMA VARIAVEL DENTRO DA FUNÇÃO, ONDE NAO É POSSIVEL ACESSAR DENTRO DE OUTRAS FUNCTIONS */

        echo "Meu nome completo é: $outronome <br>"; /* PEDINDO PARA IMPRIMIR A VARIAVEL */
        echo "Minha moto é da cor: $moto";
    }

    nome(); /* PARA EXIBIR A VARIAVEL PRECISA CHAMA-LA */

    ?>

</body>

</html>