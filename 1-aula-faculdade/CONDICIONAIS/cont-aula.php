<?php 

/* AULA 24/04 - CONTINUAÇÃO DE CONDIÇÕES */

$numeros = [1, 2, 3, 4, 5]; /* array com os valores que serao somados */

$contador = 0; /* variavel com o valor inicial que é igual a zero */

foreach($numeros as $num){ /* loop de repetição para somar os valores dentro do array */
    $contador += $num;
}

/* echo $contador; */

?>

<?php 

$fatorial = [1, 2, 3, 4, 5];

$i = 1;

foreach($fatorial as $teste){
    $i *= $teste;
}

echo $i;

?>

<?php 

/* EXIBIÇÃO DE VALORES(FRASES) DENTRO DE UM ARRAY */

$nomes = ["HTML", "CSS", "PHP", "JAVASCRIPT"]; /* VALORES DENTRO DE UM ARRAY */

$len = count($nomes); 

$a = 0;

do{
    echo "<br>" . $nomes[$a];
    $a++;
}

while($a < $len);

?>