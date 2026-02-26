<?php
require_once 'interface.php';
class ControleRemoto implements Controlador{ /* Criação da classe controle remoto */
    private $volume; /* Atributos da classe */
    private $ligado;
    private $tocando;

    function __construct()
    {
        $this->volume = 50; /* Assim que instanciarmos esse objeto, ele vai receber esses valores automaticamente */
        $this->ligado = false;
        $this->tocando = false;
    }

    function volume($volume){ /* Criação da funcao de volume */
        $this->volume = $volume;
    }

    function getVolume(){ /* criação da funcao para retornar o valor de volume */
        return $this->volume;

        if($this->volume == true){
            echo "Nao mudo";
        } else {
            echo "Mudo";
        }
    }

    function ligado($ligado){
        $this->ligado = $ligado;
    }

    function getLigado(){
        return $this->ligado;

        if($this->ligado == true){
            echo "Ligado";
        } else {
            echo "Desligado";
        }
    }

    function tocando($tocando){
        $this->tocando = $tocando;
    }

    function getTocando(){
        return $this->tocando;

        if($this->tocando == true){
            echo "Está tocando";
        } else {
            echo "Nao tá tocando";
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
        echo "Ligado: " . $this->getLigado();
        echo "Volume: " . $this->getVolume();
        echo "Tocando: " . $this->getTocando();
    }

    public function fecharMenu(){

    }

    public function maisVolume(){
        $this->volume($this->volume += 5);
    }

    public function menosVolume(){
        $this->volume($this->volume -= 5);
    }

    public function ligarMudo(){
        $this->volume(false);
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