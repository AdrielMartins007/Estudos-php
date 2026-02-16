<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritimetica</title>
</head>

<body>

    <?php

    $numero = "10" + "10"; /* NESSE EXEMPLO, EM VEZ DE CONCATENAR AS STRINGS, ELE TRANSFORMA O VALOR DE STRING PARA INT 
    E SOMA OS VALORES, ENTREGANDO O RESULTADO 20 . LEVANDO EM CONTA COM O '+' E USADO UNICAMENTE PRA ARITIMETICA*/

    var_dump($numero);
    
    $resultado = 50 / 2 + 3 ** 2;

    echo "<br>O resultado é: $resultado" 

    /* NESSE CASO, LEVANDO EM CONTA A ORDEM DE PRECEDENCIA, PRIMEIRO FAZ A EXPONENCIAÇÃO(3 ** 2), DEPOIS A DIVISÃO(50 / 2) E DEPOIS A SOMA(25 + 9)
    ONDE O RESULTADO SERÁ IGUAL A 34. OUTRO PONTO IMPORTANTE É, VC PODE MUDAR A ORDEM DE PRECEDENCIA COLOCANDO UM PARENTESE AONDE VC QUER Q O CALCULO
    SEJA FEITO PRIMEIRO, DEPOIS DE CALCULADO, VC SEGUE A ORDEM DE PROCEDENCIA DE NOVO*/
    
    ?>

</body>

</html>