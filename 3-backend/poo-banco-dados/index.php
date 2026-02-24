<?php

class ContaBanco
{
    public $nome;
    public $status;
    public $tipo;
    public $saldo;

    public function __construct($nome) /* RECEBENDO DO USUARIO SOMENTE A VARIAVEL NOME */
    {
        $this->nome = $nome;
        $this->status = "INATIVO";
        $this->tipo = "";
        $this->saldo = 0;
    }

    public function abrirConta()
    {
        if ($this->status == "ATIVO") {
            echo "SUA CONTA JÁ ESTA ATIVA!<br><br>";
        } else {
            $this->status = "ATIVO";
            echo "OLÁ " . $this->nome . ", SUA CONTA FOI ATIVADA COM SUCESSO!<br><br>";
        }
    }

    public function fecharConta()
    {
        if ($this->saldo > 0) {
            echo "NAO É POSSIVEL FECHAR A CONTA COM VALORES EM ABERTO!<br><br>";
        } else if ($this->saldo < 0) {
            echo "NAO É POSSIVEL FECHAR A CONTA COM SALDO NEGATIVO!<br><br>";
        } else {
            $this->status = "INATIVO";
            $this->tipo = "";
            echo "OLÁ " . $this->nome . ", SUA CONTA FOI DESATIVADA COM SUCESSO!<br><br>";
        }
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor; /* FUNÇÃO PARA REMOVER O VALOR DE SALDO */
        echo "FOI EFETUDADO UM SAQUE NO VALOR DE " . $valor . " REAIS!<br><br>";
    }

    public function depositar($valor)
    {
        $this->saldo += $valor; /* FUNCAO PARA ADICIONAR O VALOR DE SALDO */
        echo "FOI EFETUDADO UM DEPOSITO NO VALOR DE " . $valor . " REAIS!<br><br>";
    }

    public function setPoupanca() /* FUNCAO PARA INCLUIR O TIPO, DENTRO DA VARIAVEL $tipo*/
    {
        $this->tipo = "CONTA POUPANÇA";
        $this->saldo = 150;
    }

    public function setCorrente()
    {
        $this->tipo = "CONTA CORRENTE";
        $this->saldo = 50;
    }
}

?>

<html>

    <form action="" method="post">

    <input type="text" name="nome" placeholder="Digite seu nome: " style="text-align: center; width: 350px">

</form>
<pre>
<?php

$p1 = new ContaBanco($_POST['nome']); /* INCLUINDO SOMENTE O NOME, QUE VAI PARA O CONSTRUCT */
$p1->abrirConta();
$p1->setPoupanca();
$p1->depositar(600);
$p1->depositar(200);
$p1->sacar(1000);

print_r($p1);

?>

</pre>

</html>