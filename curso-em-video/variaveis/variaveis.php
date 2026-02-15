<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>

<body>

    <!-- 

    REGRAS

    1 - VARIAVEIS SEMPRE PRECISAM COMEÇAR COM '$' 
    2 - DEPOIS DO CIFRAO PODE SER LETRA OU '_'
    3 - ACEITA CARACTERES ACENTUADOS 'Á, É, Ç, ÇÃ,
    4 - NAO PODE USAR CARACTERES DENTRO DA LINAGUAGEM COMO '$this'

    -->

    <?php 
    
    $nome = 'Adriel Martins'; /* DECLARANDO UMA VARIAVEL OU SEJA, A VARIAVEL NOME RECEBE 'Adriel Martins'*/

    $idade = (int) "23"; /* OQ ESTOU FAZENDO DENTRO DOS PARENTESES CHAMA-SE COERSÃO, ONDE NO CASO TO FORÇANDO O VAR_DUMP E ENTENDER QUE O VALOR DA VARIAVEL É UM INTEIRO, POSSO FAZER ISSO PRA MUDAR O TIPO PRIMITIVO PARA QUALQUER OUTRO*/

    const PAIS = 'Brasil'; /* DECLARANDO UMA CONSTANTE, NAO É OBRIGATORIO SER MAISCULA, MAS POR PADROES DE MERCADO É BOM COLOCAR, TAMBEM PARA DIFERENCIAR */

    print 'meu nome é ' . $nome . ' e moro no ' . PAIS . ' e tenho ' . $idade . ' anos <br>'; /* EXIBIÇÃO DAS VARIAVEIS E USANDO O '.' PARA COCA*/

    var_dump($idade); /* COMANDO PARA MOSTRAR O TIPO PRIMITIVO DA VARIAVEL */
    
    ?>

</body>

</html>