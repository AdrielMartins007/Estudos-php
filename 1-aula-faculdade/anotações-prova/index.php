<?php 

/* ANOTAÇÕES DOS ASSUNTOS QUE JA FORAM PASSADO NESSE PRIMEIRO SEMESTRE */


/* COMANDO PARA MOSTRAR O TAMANHO DA STRING */
$frase = "Hello word!";
echo $frase . "<br>";
echo "Tamanho da frase: " . strlen($frase) . "<br>";


/* COMANDO PARA MOSTRAR A QUANTIDADE DE PALAVRAS */
$tamPalavras = "Programação web I com PHP";
echo $tamPalavras . "<br>";
echo "Quantidade de palavras: " . str_word_count($tamPalavras) . "<br>";


/* COMANDO PARA MOSTRAR E SUBSTITUIR UMA PALAVRA */
$substPalavra = "Olá mundo!";
echo $substPalavra . "<br>";
$posicao = strpos($substPalavra, "mundo");

if($posicao != false) {
    echo "mundo encontado na posição: " . $posicao . "<br>";
} else {
    echo "Palavra nao encontrada!" . "<br>";
}

/* COMANDO PARA TRANSFORMAR AS PALAVRAS TUDO EM MAIUSCULA */
$nomeMas = "Adriel Costa Martins";
echo $nomeMas . "<br>";
echo "Todas as palavras em maiuscula" . strtoupper($nomeMas) . "<br>";


/* COMANDO PARA TRANSFORMAR TODAS AS PALAVRAS EM MINUSCULO */
$nomeMin = "ADRIEL COSTA MARTINS";
echo $nomeMin . "<br>";
echo "Todas as palavras em minusculo: " . strtolower($nomeMin) . "<br>";


/* COMANDO PARA REMOVER OS ESPAÇOS */
$removerEsp = "IFPA - PARAGOMINAS PARÁ";
echo $removerEsp . "<br>";
echo "Remover os espaços: " . str_replace(" ", "", $removerEsp) . "<br>";
?>