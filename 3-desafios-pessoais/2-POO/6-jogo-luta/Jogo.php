<?php

class Lutadores
{
    public $nome;
    public $vida;
    public $ataque;

    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->vida = 100;
        $this->ataque = "";
    }

    public function facada($adversario)
    {
        $adversario->vida -= 30;

        echo $this->nome . " da uma facada...<br><br>";
    }

    public function tiro($adversario)
    {
        $adversario->vida -= 45;

        echo $this->nome . " da um tiro certeiro...<br><br>";
    }

    public function habilidEspecial($adversario)
    {
        $adversario->vida -= 60;

        echo $this->nome . " ativa sua habilidade especial...<br><br>";
    }

    public function status(){
        echo "Status: <br>";
        echo "Lutador: " . $this->nome . "<br>";
        echo "Vida: " . $this->vida . "<br>";
    }
}

class Jogo
{
    public $lutador1;
    public $lutador2;

    public function __construct($l1, $l2)
    {
        $this->lutador1 = $l1;
        $this->lutador2 = $l2;
    }

    public function iniciar()
    {
        echo "O Jogo ja vai começar...<br>";
        echo "Preparado " . $this->lutador1->nome . "?";
        echo " Preparado " . $this->lutador2->nome . "?<br>";
        echo "Vamos começar....<br><br>";
    }

    public function status(){
        $this->lutador1->status();
        $this->lutador2->status();
    }
}



