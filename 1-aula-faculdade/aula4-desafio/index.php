<pre>
<?php 

$frase = " PHP é MUITO legal, eu amo PHP! "; /* Criação da frase */
$novaFrase = strtolower(trim($frase)); /* Transformando a frase em minuscula */
echo $novaFrase; 

echo "\n";

echo str_replace("php", "PHP", $novaFrase); /* mudando a palavra minuscula para maiuscula */
$totalPalavras = str_word_count($novaFrase); /* funcao de contar palavras */

echo "\n";

echo "Quantidade de palavras: " . $totalPalavras; /* exibição da quantidade de palavra */

$palavra = "amo";

if(str_contains($frase, $palavra)){
    echo "\n";
    echo "Palavra amo encontrada";
} else {
    echo "\n";
    echo "Palavra nao encontrada";
}

?>
</pre>