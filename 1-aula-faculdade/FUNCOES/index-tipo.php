<?php 

declare(strict_types=1); /* FUNCAO PARA INFORMAR QUE O PHP ESTÁ TIPADO */

function adicioneNumero(int $a, int $b) : int{ /* INFORMANDO O TIPO DE CADA VARIAVEL */ /* O ': int' SIGNIFICA QUE VAI RETORNAR O TIPO INT */
    return $a + $b;
}

echo adicioneNumero(5, 5);

?>