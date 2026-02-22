<?php 

class Contabanco{
    public $status;
    private $dono;
    private $saque;
    private $deposito;
    private $saldo;

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    public function abrirConta(){
        $this->setStatus("ATIVADO");

        echo "BEM VINDO SR: " . $this->dono . ", SUA CONTA FOI ATIVADA COM SUCESSO...<br><br>";
    }

    public function fecharConta(){
        $this->setStatus("FECHADO");
        $this->setSaldo(0);
        echo "CONTA FECHADA COM SUCESSO...<br><br>";
    }

    public function saque($valor){
        $this->setSaldo($this->getSaldo() - $valor);
        $this->setSaque($valor);
        echo "SAQUE DE " . $valor . " REAIS NA CONTA DE " . $this->getDono() . "<br><br>";
    }

    public function deposito($valor){
        $this->setSaldo($this->getSaldo() + $valor);
        $this->setDeposito($valor);
        echo "DEPOSITO DE " . $valor . " REAIS NA CONTA DE " . $this->getDono() . "<br><br>";
    }



    public function getStatus(){
        return $this->status;
    }

    public function setStatus($st){
        $this->status = $st;
    }
    
    public function getDono(){
        return $this->dono;
    }

    public function setDono($dn){
        $this->dono = $dn;
    }

    public function getSaque(){
        return $this->saque;
    }

    public function setSaque($sq){
        $this->saque = $sq;
    }

    public function getDeposito(){
        return $this->deposito;
    }

    public function setDeposito($dp){
        $this->deposito = $dp;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($sd){
        $this->saldo = $sd;
    }

}

?>