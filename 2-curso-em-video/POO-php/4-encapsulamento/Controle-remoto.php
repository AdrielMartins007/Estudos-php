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

    function volume(){ /* Criação da funcao de volume */

    }

    function getVolume(){ /* criação da funcao para retornar o valor de volume */
        return $this->volume;
    }

    function ligado(){

    }

    function getLigado(){
        return $this->ligado;
    }

    function tocando(){
        
    }

    function getTocando(){
        return $this->tocando;
    }


    /* Implementando as funcoes da interface para dentro da classe controle remoto */

    public function ligar(){

    }

    public function desligar(){

    }

    public function abrirMenu(){

    }

    public function fecharMenu(){

    }

    public function maisVolume(){

    }

    public function menosVolume(){

    }

    public function ligarMudo(){

    }

    public function desligarMudo(){

    }

    public function play(){

    }

    public function pause(){

    }
}

?>