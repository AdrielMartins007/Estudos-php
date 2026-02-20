<?php 

/* 
http://localhost/estudos-php/1-aula-faculdade/aula3-objetos//segunda-aula
*/

$ativo = false;

var_dump($ativo);

$idade = 23;

var_dump($idade);

$preco = 19.99;

var_dump($preco);

$nome = "Adriel";

var_dump($nome); 

$frutas = ["maçã", "banana", "uva"];

var_dump($frutas[1]);

?>

<?php 

class aluno{
    public $nome;
    public $matricula;

    function __construct($nome, $matricula){

    $this->nome = $nome;
    $this->matricula = $matricula;

    }

    function mensagem(){
        var_dump($this->nome, $this->matricula);
    }

}

$aluno = new aluno("Adriel", 1234);
$aluno->mensagem();

?>

<?php

echo "<br><br>--------------------------<br><br>";

/* 

FUNCÕES UTEIS

echo strlen("Adriel"); - CONTADOR DE 'LETRAS' DENTRO DOS PARENTESES

echo str_word_count("Adriel Costa Martins") - CONTADOR DE PALAVRAS

echo strpos("Adriel Costa Martins", "costa") - MOSTRA A POSIÇÃO DA PALAVRA AONDE FOI INFORMADO DEPOIS DA VIRGULA 

*/


?>