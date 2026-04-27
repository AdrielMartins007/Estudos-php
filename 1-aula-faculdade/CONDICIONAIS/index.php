<?php 

/* CONDIÇÃO PARA DEFINIR O HORARIO */

date_default_timezone_set('America/Sao_Paulo'); /* FUNCAO PARA PEGAR O HORARIO DO LOCAL */

$hora = date('H:i:s'); /* FUNCAO PARA EXIBIR O HORARIO LOCAL */

if ($hora >= 0 && $hora <= 12){
    echo "Sao: " . $hora . ", Bom dia";
} else if ($hora > 12 && $hora <= 18){
    echo "Sao: " . $hora . ", Boa tarde";
} else {
    echo "Sao: " . $hora . ", Boa noite";
}

/* PODEMOS INCLUIR OS COMANDOS EM UMA LINHA */

$testando = 11;

echo ($testando < 10) ? "<br>Testando a condição em uma linha." : "Nao ta funcionando."
?>