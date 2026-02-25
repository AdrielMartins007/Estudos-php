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
        if ($this->verificadorLogin($emailConta)) { /* chamando o varificador de login */
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

    public function verificadorLogin($emailConta) /* Primeira funcao executada assim que criamos o objeto */
    {
        foreach (self::$listaContas as $conta) {
            /* verificando cada elemento dentro do array com o foreach */
            if ($conta['email'] == $emailConta) {
                /* aqui é a verificação de apenas um tipo de item do elemento */
                return true;
            }
        }

        return false;
    }

    public function salvarSenha($origem, $email, $senha)
    {
        /* incluindo os valores das variaveis dentro do array. Selecionando o array dentro da classe com o self */
        self::$listaSenhas[] = [
            'nomeConta' => $origem,
            'emailUsuario' => $email,
            'senhaUsuario' => $senha
            /* Incluindo 3 valores dentro de um array e criado associação dos valores com as variaveis com o '=>' */
        ];

        echo "Sua senha foi salva com sucesso :)<br><br>";
    }

    public function salvarConta($emailConta, $senhaConta)
    {
        self::$listaContas[] = [
            'email' => $emailConta,
            'senha' => $senhaConta
            /* Incluindo o email e senha da conta do app dento do array */
        ];

        echo "Senha salva com sucesso<br>";
    }

    public function fazerLogin($emailConta, $senhaConta)
    {
        foreach (self::$listaContas as $conta) {
            /* foreach verifica cada elemento dentro do array. $conta é a variavel que criamos que vai receber os valores individualmente como email e senha, está sendo usado o colchete para informar o tipo que precisa ser mostrado ['email'], tudo dentro da variavel $conta*/
            if ($conta['email'] == $emailConta && $conta['senha'] == $senhaConta) {
                /* verificando individualmente se as duas condições sao verdadeiras para poder fazer login */

                echo "Login realizado com sucesso<br>";
                return true;
            }
        }

        echo "Email ou senha incorretos<br>";
        return false;
        /* caso nao seja verdadeira, mensagem informando */
    }

    public function mostrarDados()
    {
        foreach (self::$listaSenhas as $registro) { /* Fazendo a varredura dos dados do array */
            /* $registro é a variavel que criamos para receber os valores individualmente */

            echo "Conta: " . $registro['nomeConta'] . "<br>";
            echo "Email: " . $registro['emailUsuario'] . "<br>";
            echo "Senha: " . $registro['senhaUsuario'] . "<br><br>";
        }
    }
}
