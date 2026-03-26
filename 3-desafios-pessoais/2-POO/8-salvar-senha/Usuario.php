<?php

class Usuario
{
    public $conta;
    public $email;
    public $senha;

    public function __construct()
    {
        $this->conta = "";
        $this->email = "";
        $this->senha = "";
    }

    public function enviarDados($conta, $email, $senha)
    {
        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = [];
        }

        $_SESSION['usuarios'][] = [
            'conta' => $conta,
            'email' => $email,
            'senha' => $senha
        ];

        echo "Dados enviados com sucesso...<br><br>";
    }

    public function mostrarDados()
    {
        foreach ($_SESSION['usuarios'] as $user) {
            echo "Conta: " . $user['conta'] . "<br>";
            echo "Email: " . $user['email'] . "<br>";
            echo "Aenha: " . $user['senha'] . "<br>";
        }
    }
}
