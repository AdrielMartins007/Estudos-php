<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes simples</title>
</head>

<body>

    <?php 
    
    date_default_timezone_set("America/Belem"); /* COMANDO PARA CONFIGURAR A HORA PARA O PADRAO DA AMERICA, ISSO PQ A HORA 'ERRADA' QUE ESTA SENDO EXIBIDA SERIA A HORA DO SERVIDOR, OU SEJA, A HORA QUE FOI CONFIGURADA NO SERVIDOR */

    echo 'Hoje é dia: ' . date('d/M/Y') . '<br>'; /* FUNCAO PARA A DATA */

    echo 'E são: ' . date('G:i:s'); /* FUNCAO PARA EXIBIR A HORA - O 'G' É PRA FORMATO 24HORAS*/
    
    ?>

</body>

</html>