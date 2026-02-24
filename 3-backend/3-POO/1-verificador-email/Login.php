<?php

class Login{
    public $nome;
    public $email;
    private $senha;

    public static $emails = []; /* CRIAÇÃO DO ARRAY $emails QUE É AONDE VAI SER ARMAZENADOS OS EMAILS. STATIC SIGNIFICA QUE ELA NAO PERTENCE AO NOVO OBJETO E SIM A CLASSE, OU SEJA, TODOS OS EMAILS CRIADOS, MESMO QUE UM NOVO OBJETO, IRÃO PRA DENTRO DO ARRAY. */

    public function __construct($nome, $email, $senha){

        if($this->confirmar($email)){
            echo "ERRO: EMAIL JA CADASTRADO!<br><br>";
            return;
        }

        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;

        self::$emails[] = $email;

        echo "USUARIO CADASTRADO COM SUCESSO<br><br>";
    }

    public function confirmar($email){

        return in_array($email, self::$emails);

    }

    public function mostrar(){
        echo "EMAIL: " .$this->email . "<br><br>";
        echo "SENHA: " .$this->senha . "<br><br>";
    }

}
?>

<?php

?>