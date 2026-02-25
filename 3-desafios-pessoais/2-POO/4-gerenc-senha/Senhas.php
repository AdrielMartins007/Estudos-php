<?php

class Senhas
{
    public $emailConta; /* email da conta de acesso ao app */
    public $senhaConta; /* senha da conta de acesso ao app */
    public $senha; /* senhas guardadas */
    public $email; /* emails guardados com as senhas do usuario */
    public $nome; /* nome usuario */

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
                return true;
            } else {
                echo "Conta ja cadastrada!";
                exit;
            }
        }
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

    public function salvarSenha($email, $senha)
    {

        self::$listaSenhas[] = [
            'emailUsuario' => $email,
            'senhaUsuario' => $senha
        ];
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

            echo "Email: " . $registro['emailUsuario'] . "<br>";
            echo "Senha: " . $registro['senhaUsuario'] . "<br><br>";
        }
    }
}

?>

<html>
<pre>
        <?php

        $user1 = new Senhas("adriel123@gmail.com", 123123, null, null, "Adriel");
        $user1->salvarConta("adriel123@gmail.com", 123123);
        $user1->salvarSenha("adriel123@gmail.com", "thais123");
        $user1->salvarSenha("thais123@gmail.com", "thais123");
        $user1->salvarSenha("thais123@gmail.com", "thais123");
        $user1->salvarSenha("thais123@gmail.com", "thais123");
        $user1->salvarSenha("thais123@gmail.com", "thais123");
        $user1->salvarSenha("thais123@gmail.com", "thais123");
        $user1->mostrarDados();

        ?>
    </pre>

</html>