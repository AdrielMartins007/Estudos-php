<?php
require_once 'interface.php';
class ControleRemoto implements Controlador{ /* Criação da classe controle remoto */
    private $volume; /* Atributos da classe */
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->volume = 50; /* Assim que instanciarmos esse objeto, ele vai receber esses valores automaticamente */
        $this->ligado = false;
        $this->tocando = false;
    }

    private function ligado($ligado){
        $this->ligado = $ligado;
    }

    private function getLigado(){
        if($this->ligado == true){
            return "Sim";
        } else {
            return "Nao";
        }
    }

    private function volume($volume){ /* Criação da funcao de volume */
        $this->volume = $volume;
    }

    private function getVolume(){ /* criação da funcao para retornar o valor de volume */

        if($this->volume == true){
            return "Sim";
        } else {
            return "Nao";
        }
    }

    private function tocando($tocando){
        $this->tocando = $tocando;
    }

    private function getTocando(){
        if($this->tocando == true){
            return "Sim";
        } else {
            return "Nao";
        }
    }


    /* Implementando as funcoes da interface para dentro da classe controle remoto */

    public function ligar(){
        $this->ligado(true);
    }

    public function desligar(){
        $this->ligado(false);
    }

    public function abrirMenu(){
        echo "Ligado: " . $this->getLigado() . "<br>";
        echo "Volume: " . $this->getVolume() . "<br>";
        echo "Tocando: " . $this->getTocando() . "<br>";
    }

    public function fecharMenu(){
        echo "Fechando o menu...";
    }

    public function maisVolume(){
        $this->volume($this->volume += 5);
    }

    public function menosVolume(){
        $this->volume($this->volume -= 5);
    }

    public function ligarMudo(){
        $this->volume($this->volume == 0);
    }

    public function desligarMudo(){
        $this->volume(true);
    }

    public function play(){
        $this->tocando(true);
    }

    public function pause(){
        $this->tocando(false);
    }
}

?>