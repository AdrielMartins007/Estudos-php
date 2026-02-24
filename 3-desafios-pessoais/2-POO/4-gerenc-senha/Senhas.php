<?php

class Senhas{
    public $nome;
    public $email;
    public $senhaEmail;
    public $conta;
    public $senhaConta;

    public static $listaSenhas = [];
    public static $listaEmails = [];

    public function __construct($nome, $email, $conta, $senhaEmail){

        if($this->verificarEmail($email)){
            echo "ERRO! Esse email ja tem cadastro no sistema<br>";
            exit;
        }

        $this->nome = $nome;
        $this->email = $email;
        $this->senhaEmail = $senhaEmail;
        $this->conta = $conta;
        $this->senhaConta = "";

    }

    public function verificarEmail($email){
        
    }

}

?>