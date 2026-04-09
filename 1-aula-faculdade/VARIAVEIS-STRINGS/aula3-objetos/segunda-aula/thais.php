<?php 
$ativo = false;
var_dump($ativo);

$idade = 25;
var_dump($idade);

$preço = 19.90;
var_dump($preço);

$nome = "Lennon";
$mensagem = "Olá, $nome!";

echo "$mensagem";

$frutas = ["maça","banana", "uva"];
var_dump($frutas[1]);

class aluno{
    public $nome;
    public $matricula;

    function __construct($nome, $matricula){
        $this->nome = $nome;
        $this->matricula = $matricula;    
    }
    
}

$aluno = new aluno("Thais","20261111");
     var_dump($aluno);

$telefone = null;
var_dump($telefone);
var_dump(is_null($telefone));

?>