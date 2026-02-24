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
            /* CONDIÇÃO QUE CHAMA A FUNCAO PARA VERIFICAR O EMAIL ANTES DAS OUTRAS COISAS, SE CASO DER VERDADEIRO, OU SEJA, SE O EMAIL JA TIVER CADASTRO, ELE RETORNA PRO COMEÇO E NAO EXECUTA O RESTANTE DO COMANDO. */
        }

        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;

        self::$emails[] = $email;
        /* CHAMANDO A VARIAVEL QUE NAO É DO OBJETO E SIM PERTENCENTE A CLASSE E INCLUINDO TODOS OS EMAILS DENTRO DO ARRAY SE CASO NAO TIVER REPETIDO */

        echo "USUARIO CADASTRADO COM SUCESSO<br><br>";
    }

    public function confirmar($email){

        return in_array($email, self::$emails);
        /* NO CASO AQUI, É A VERIFICAÇÃO DOS EMAILS DENTRO DO ARRAY, 
        in_array É O QUE FAZ A VERIFICAÇÃO DENTRO DO ARRAY E RETORNA PARA NÓS O VALOR, SE SIM OU SE NAO. */

    }

    public function mostrar(){
        echo "EMAIL: " .$this->email . "<br><br>";
        echo "SENHA: " .$this->senha . "<br><br>";
    }
}
?>

<?php

?>