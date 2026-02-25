<?php

class Senhas
{
    public $emailConta; /* email da conta de acesso ao app */
    public $senhaConta; /* senha da conta de acesso ao app */
    public $senha; /* senhas guardadas */
    public $email; /* emails guardados com as senhas do usuario */
    public $nome; /* nome usuario */
    public $origem; /* informa de onde é a conta que foi cadastrada */

    public static $listaSenhas = []; /* array com as senhas salvas do usuario */
    public static $listaContas = []; /* array com email e senha da conta de acesso do app */

    public function __construct($emailConta, $senhaConta, $senha, $email, $nome)
    {
        if ($this->verificadorLogin($emailConta)) {
            echo "ERRO, Esse email já tem cadastro no app<br>";
            exit;
        } else {
            echo "Olá " . $nome . ", seu login criado com sucesso<br>";
        }

        $this->senha = $senha;
        $this->email = $email;
        $this->nome = $nome;
        $this->emailConta = $emailConta;
        $this->senhaConta = $senhaConta;
    }

    public function fazerLogin($emailConta, $senhaConta)
    {
        foreach (self::$listaContas as $conta) {

            if ($conta['email'] == $emailConta && $conta['senha'] == $senhaConta) {

                echo "Login realizado com sucesso<br>";
                return true;
            }
        }

        echo "Email ou senha incorretos<br>";
        return false;
    }

    public function verificadorLogin($emailConta)
    {
        foreach (self::$listaContas as $conta) {
            if ($conta['email'] == $emailConta) {
                return true;
            }
        }

        return false;
    }

    public function salvarSenha($origem, $email, $senha)
    {

        self::$listaSenhas[] = [
            'nomeConta' => $origem,
            'emailUsuario' => $email,
            'senhaUsuario' => $senha
        ];

        echo "Sua senha foi salva com sucesso :)<br><br>";
    }

    public function salvarConta($emailConta, $senhaConta)
    {
        self::$listaContas[] = [
            'email' => $emailConta,
            'senha' => $senhaConta /* Nesse caso, to inserindo dois valores diferentes dentro do array para uma mini verificação */
        ];

        echo "Senha salva com sucesso<br>";
    }

    public function mostrarDados()
    {
        foreach (self::$listaSenhas as $registro) {

            echo "Conta: " . $registro['nomeConta'] . "<br>";
            echo "Email: " . $registro['emailUsuario'] . "<br>";
            echo "Senha: " . $registro['senhaUsuario'] . "<br><br>";
        }
    }
}
