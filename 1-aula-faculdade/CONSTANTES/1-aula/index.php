<?php

/* MANEIRA DE DEFINIR UMA CONSTANTE COM DEFINE */

define("Olá", "Minha moto lander azul" . "<br>");

echo Olá;

/* AGORA COM CONST */

const minhaMoto = "Minha moto lander azul" . "<br>";

echo minhaMoto;

/* CRIANDO UM ARRAY CONSTANTE */

define("MOTO", [
    "YAMAHA",
    "HONDA",
    "BMW"
]);

/* CRIANDO A FUNCAO PARA EXIBIR A MENSAGEM */

function teste(){
    echo MOTO[0] . "<br>";
}

/* CONSTANTES MAGICAS */

function meuValor(){
    return __METHOD__;
}

echo meuValor() . "<br>";

/* OPERADORES DE COMPARAÇÃO */

$num1 = "ana1";
$num2 = "ana";

echo $num1 <=> $num2;

/* OPERADORES LOGICOS */

$num1 = "Adriel";
$num2 = "Thais";

echo $num1 .= $num2;

/* OPERADOR TERNARIO */

$idade = 17;
$faixa;

$faixa = ($idade >= 18)? "Maior de idade" : "Menor de idade";

echo $faixa;

?>
