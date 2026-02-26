<?php
require_once 'interface.php';

class ControleRemoto implements Controlador
{ /* Criação da classe controle remoto */
    private $volume; /* Atributos da classe */
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->volume = 50; /* Assim que instanciarmos esse objeto, ele vai receber esses valores automaticamente */
        $this->ligado = false;
        $this->tocando = false;
    }

    private function ligado($ligado)
    {
        $this->ligado = $ligado;
    }

    private function getLigado()
    {
        if ($this->ligado == true) {
            return "Sim";
        } else {
            return "Nao";
        }
    }

    private function volume($volume)
    { /* Criação da funcao de volume */
        $this->volume = $volume;
    }

    private function getVolume()
    { /* criação da funcao para retornar o valor de volume */
        return $this->volume . "%";
    }

    private function tocando($tocando)
    {
        $this->tocando = $tocando;
    }

    private function getTocando()
    {
        if ($this->tocando == true) {
            return "Sim";
        } else {
            return "Nao";
        }
    }


    /* Implementando as funcoes da interface para dentro da classe controle remoto */

    public function ligar()
    {
        if ($this->ligado == false) {
            $this->ligado($this->ligado = true);
            echo "Ligando...<br>";
        } else {
            echo "O dispositivo ja esta ligado!<br>";
        }
    }

    public function desligar()
    {
        if ($this->ligado == true) {
            $this->ligado($this->ligado = false);
            echo "Desligando...<br>";
        } else {
            echo "O dispositivo ja esta desligado!<br>";
        }
    }

    public function abrirMenu()
    {
        echo "<br>Ligado: " . $this->getLigado() . "<br>";
        echo "Volume: " . $this->getVolume() . "<br>";
        echo "Tocando: " . $this->getTocando() . "<br><br>";
    }

    public function fecharMenu()
    {
        echo "Fechando o menu...<br>";
    }

    public function maisVolume()
    {
        if ($this->ligado == true) {
            $this->volume($this->volume += 5);
            echo "Aumentando...<br>";
        } else {
            echo "Televisao desligada<br>";
        }
    }

    public function menosVolume()
    {
        if ($this->ligado == true) {
            $this->volume($this->volume -= 5);
            echo "Diminuindo...<br>";
        } else {
            echo "Televisao desligada<br>";
        }

        if ($this->volume < 0) {
            $this->volume($this->volume = 0);
        }
    }

    public function ligarMudo()
    {
        if ($this->tocando == true && $this->volume > 0) {
            $this->tocando(false);
            $this->volume = 0;
            echo "Modo Mudo<br>";
        } else {
            echo "Já esta no mudo<br>";
        }
    }

    public function desligarMudo()
    {
        if ($this->tocando == false && $this->volume == 0) {
            $this->tocando(true);
            $this->volume = 10;
            echo "Modo mudo desligado<br>";
        } else {
            "Já esta no mudo...<br>";
        }
    }

    public function play()
    {
        if ($this->tocando == false) {
            $this->tocando(true);
            echo "Musica tocando...<br>";
        } else {
            echo "Modo mudo ativado<br>";
        }
    }

    public function pause()
    {
        if ($this->tocando == true) {
            $this->tocando = false;
            echo "Musica pausada...<br>";
        } else {
            echo "Musica já pausada...<br>";
        }
    }
}
