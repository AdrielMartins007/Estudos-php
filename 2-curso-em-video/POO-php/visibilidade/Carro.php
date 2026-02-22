<?php 

/* 

TIPOS DE VISIBILIDADE: 

+ PUBLICO - todas as classes terão acesso aos atibutos e metodos publicos

- PRIVADO - Somente a classe atual tem acesso aos atibutos e metodos privados

# PROTEGIDO - Somente a classe atual e as subclasses tem acesso aos atibutos e metodos protegidos

*/

class Carros{
    public $novo;
    public $cor;
    private $modelo;
    protected $chave;
    protected $motor;

    private function ligar(){
        if($this->chave === true){
            echo "CHAVE ATIVA: CARRO LIGANDO<br>";
        } else {
            echo "CARRO DESLIGADO<br>";
        }
    }

    private function vender(){
        if($this->motor === true){
            echo "PARABENS PELO CARRO NOVO!<br>";
        } else {
            echo "PRECISA VENDER...<br>";
        }
    }

    public function revisao(){
        if($this->novo === true){
            echo "CARRO OKAY<br>";
        } else {
            echo "PRECISA DE REVISÃO<br>";
        }
    }

    public function mensagem(){
        echo "CARRO DA COR: $this->cor, MODELO: $this->modelo<br>";
    }

    public function tipo(){
        if($this->novo === true){
            echo "CARRO NOVO<br>";
        } else {
            echo "CARRO VELHO<br>";
        }
    }
}

?>