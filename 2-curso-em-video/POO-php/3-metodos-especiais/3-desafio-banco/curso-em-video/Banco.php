<?php

/*

NOTAS SOBRE O DESAFIO BANCO

Atributos da classe banco{
    public numConta
    protecd tipo - (conta poupança e conta corrente)
    private dono 
    private saldo
    private status
}

Funcoes da conta{
    public abrirConta() - muda os status de 'false' para 'true' && abrindo conta corrente ele ganha +50 reais, poupança +150 reais

    public fecharConta() - so pode fechar conta se tiver sem saldo

    public depositar() - so pode depositar se a conta estiver aberta

    public sacar() - precisa ta com a conta aberta, ter saldo e nao pode sacar mais que o saldo na conta

    public pagarMensalidade() - conta corrente -12 reais e poupança -20reais
}

Todos os atributos terao get e set.

Metodo construtor{

status = false
saldo = 0
}

*/

?>

<?php 

class Banco{
    public $numConta; 
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
    }       

    public function abrirConta($tp){ /* INCLUINDO A VARIAVEL DE TIPO DE CONTA */
        $this->setTipo($tp);
        $this->setStatus(true); /* MUDANDO O STATUS PARA ATIVO */

        if ($tp == "CC"){
            $this->setSaldo(50); /* SE CASO O TIPO DE CONTA FOR CONTA CORRENTE, +50 REAIS */
        } else {
            $this->setSaldo(150); /* SE FOR CONTA POUPANÇA, +150 REAIS */
        }
    }

    public function fecharConta(){ /* FAZENDO A VERIFICAÇÃO PRA PODER FECHAR CONTA */
        if ($this->getSaldo() > 0){ /* GETSALDO PARA ACESSAR O SALDO DA CONTA */
            echo "ERRO, TEM SALDO NA SUA CONTA<br><br>"; 
        } else if ($this->getSaldo() < 0) { /* GETSALDO PARA VERIFICAR DE NOVO */
            echo "SUA CONTA ESTÁ NEGATIVA<br><br>";
        } else {
            $this->setStatus(false); /* SE CASO NAO DER NENHUMA DAS CONDIÇÕES, É MUDADO A CONDIÇÃO DO STATUS PELO SETSTATUS */
            echo "CONTA FECHADA...<br><br>";
        }
    }

    public function depositar($valor){ /* DECLARANDO A VARIAVEL QUE VAI RECEBER O VALOR */
        if($this->getStatus()){ /* ACESSANDO O GETSALDO PARA MODIFICAR */
            $this->setSaldo($this->getSaldo() + $valor); /* AQUI IREMOS PEGAR O SALDO, DEPOIS IREMOS FAZER O ACESSO PRA DEPOIS DEPOSITAR O VALOR */
        } else {
            echo "CONTA FECHADA, IMPOSSIVEL DEPOSITAR<br><br>";
        }

        echo "DEPOSITO NA CONTA DE " . $this->getDono() . "<br><br>";
    }

    public function sacar($valor){ /* CRIAÇÃO DA VARIAVEL DE SAQUE */
        if($this->getSaldo()){ /* VERIFICANDO O SALDO */
            if($this->getSaldo() >= $valor){ /* ACESSANDO O SALDO PARA VER SE O VALOR É MENOR QUE O PEDIDO */
                $this->setSaldo($this->getSaldo() - $valor); /* SE CASO FOR, ELE IRÁ DIMINUIR, POREM, FICARÁ NEGATIVO */
                echo "SAQUE REALIZADO NO VALOR DE " . $valor . " NA CONTA DE " . $this->getDono() . "<br><br>";
            } else {
                echo "SALDO INSUFICIENTE PARA SACAR<br><br>";
            }
        } else {
            echo "NAO É POSSIVEL SACAR DE UMA CONTA FECHADA<br><br>";
        }
    }

    public function pagarMensalidade(){
        if ($this->getTipo() == "CC") { /* VERIFICANDO SE A CONTA É CONTA CORRENTE */
            $valor = 12;
        } else if ($this->getTipo() == "CP") {
            $valor = 20;
        }

        if ($this->getSaldo()){
            $this->setSaldo($this->getSaldo() - $valor); /* NO CASO AQUI, SEJA QUAL FOR, VAI SER ACESSAO DE DIMINUIDO O VALOR REFERENTE A CONTA */
        } else {
            echo "ERRO, PROBLEMAS COM A CONTA...<br><br>";
        }
    }



    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($ct){
        $this->numConta = $ct;
    }
    
    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tp){
        $this->tipo = $tp;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($dn){ 
        $this->dono = $dn;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($sd){
        $this->saldo = $sd;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($st){
        $this->status = $st;
    }
}

?>