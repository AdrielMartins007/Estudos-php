<?php 

class contaBanco{
    public $conta;
    public $dono;
    public $tipo;
    public $status;
    public $saldo;

    private static $contador = 0; /* VARIAVEL QUE VAI RECEBER VALORES A CADA NOVO USUARIO */

    public function __construct($dono)
    {
        $this->dono = $dono;
        $this->status = false;
        $this->saldo = 0;
        $this->conta = 0;
    }

    public function abrirConta(){
        $this->status = "ATIVO";

        echo "OLÁ " . $this->dono . ", SUA CONTA FOI ATIVADA COM SUCESSO<br><br>";

        self::$contador++; /* A CADA NOVO USUARIO QUE USAR A FUNÇÃO ABRIRCONTA O NUMEORO DA CONTA SERÁ + 1 */
        $this->conta = self::$contador;

    }

    public function setCorrente(){
        $this->tipo = "CONTA CORRENTE";
        $this->saldo = 50;

        echo "CONTA CORRENTE CRIADA COM SUCESSO<br><br>";
    }

    public function setPoupanca(){
        $this->tipo = "CONTA POUPANÇA";
        $this->saldo = 150;

        echo "CONTA POUPANÇA CRIADA COM SUCESSO<br><br>";
    }

    public function fecharConta(){
        if($this->saldo < 0){
            echo "NAO É POSSIVEL FECHAR A CONTA, VC ESTÁ EM DEBITO<br><br>";
        } else if ($this->saldo > 0){
            echo "NAO É POSSIVEL FECHAR A CONTA, VC AINDA POSSUI SALDO NA CONTA<br><br>";
        } else {
            echo "SUA CONTA FOI FECHADA COM SUCESSO...<br><br>";
            $this->status = "INATIVO";
        }
    }

    public function deposito($valor){
        $this->saldo += $valor;
        echo $this->dono . " RELIZOU UM DEPOSITO DE " . $valor . "<br><br>";
    }

    public function saque($valor){
        if ($this->saldo < $valor){
            echo "NÃO É POSSIVEL SACAR VALOR MAIOR QUE " . $this->saldo . ", TENTE OUTRO VALOR<br><br>";
        } else {
            $this->saldo -= $valor;
            echo $this->dono . " RELIZOU UM SAQUE DE " . $valor . "<br><br>";
        }
    }

    public function mostrarSaldo(){
        echo "SEU SALDO ATUAL: " . $this->saldo;
    }
}

?>