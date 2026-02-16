<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes aritimeticas</title>
</head>

<body>

    <h2>TIPOS DE FUNÇÕES PHP</h2>

    <?php

    $val1 = abs(-250); /* MOSTRA O VALOR EXATO, SO QUE SEM O SINAL */

    $val2 = intdiv(5, 2); /* CALCULA O VALOR INTEIRO DA DIVISÃO SEM O PONTO */

    $val3 = min(5, 4, 3, 2); /* CALCULA O MENOR VALOR ENTRE OS NUMEROS DENTRO DO PARENTESES */

    $val4 = max(2, 3, 4, 5); /* CALCULA O MAIOR VALOR ENTRE OS NUMEROS DENTRO DO PARENTESES */

    $val5 = sqrt(81);

    // base_convert() PRA CONVERTER A BASE NUMERICA

    // pi() PARA MOSTRAR O VALOR DE PI

    // M_PI OUTRA MANEIRA DE MOSTRAR O VALOR DE PI

    echo "VALOR EXATO : $val1 <br> VALOR INTEIRO: $val2 <br> MENOR VALOR: $val3<br> MAIOR VALOR: $val4<br> RAIZ QUADRADA DE 81: $val5<br> VALOR DE PI: " . M_PI;

    ?>

</body>

</html>