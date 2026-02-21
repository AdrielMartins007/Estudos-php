<?php

class pessoa{
    public $nome;
    public $idade;
    public $sexo;

    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function mensagem(){
        echo "meu nome é: $this->nome, tenho $this->idade e meu sexo é: $this->sexo";
    }
}

$pessoa1 = new pessoa("Adriel", 23, "masculino");
$pessoa1->mensagem();

?>