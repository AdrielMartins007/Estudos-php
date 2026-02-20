<?php

class cadastro{
    
    public $nome;
    public $email;
    public $senha;

    public function __construct($nome, $email, $senha){

        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function mensagem(){
        
        echo "Bem vindo $this->nome,<br><br>email: $this->email<br>senha: $this->senha.";
    }
}

$mostrar = new cadastro("Adriel", "Adriel123@gmail.com", 123456);
$mostrar->mensagem();