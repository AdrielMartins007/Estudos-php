<?php

class Lutadores
{
    public $nome; /* nome do personagem que será inserido dentro do jogo */
    public $vida; /* quantidade de vida */
    public $ataque; /* valor do ataque */

    public function __construct($nome) /* variavel que vai receber o nome do personagem */
    {
        $this->nome = $nome; /* nome recebe o valor inserido ao instanciar o objeto */
        $this->vida = 100; /* valor maximo é 100 de vida */
        $this->ataque = ""; /* a cada ataque será inserido um valor dentro da varaivel ataque */
    }

    public function facada($adversario) /* nome do personagem que recebera o ataque será inserido dentro da variavel $adversario */
    {
        $adversario->vida -= 30; /* a vida do persogem será retirada o valor do ataque */

        echo $this->nome . " da uma facada...<br><br>"; /* mostra o nome do personagem e o golpe */
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

    public function status(){ /* criando a funcao de status, aonde será mostrado os valores de vida de cada personagem no jogo */
        echo "Status: <br>";
        echo "Lutador: " . $this->nome . "<br>";
        echo "Vida: " . $this->vida . "<br>";
    }
}

class Jogo
{
    public $lutador1; /* o jogo recebera dois lutadores */
    public $lutador2;

    public function __construct($l1, $l2) /* na hora de istanciar, o jogo irá receber as variaveis dos personagem dentro do jogo */
    {
        $this->lutador1 = $l1; /* juntando o valor das variaveis com o nome dos jogadores */
        $this->lutador2 = $l2;
    }

    public function iniciar() /* funcao que vai mostrar uma mensagem de inicio apresentando os personagens */
    {
        echo "O Jogo ja vai começar...<br>";
        echo "Preparado " . $this->lutador1->nome . "?"; /* chamando o nome do jogador a partir da classe lutadores */
        echo " Preparado " . $this->lutador2->nome . "?<br>";
        echo "Vamos começar....<br><br>";
    }

    public function status(){ /* funcao para mostrar os status dos jogadores */
        $this->lutador1->status(); /* pegando os valores de cada jogador a partir da classe status dentro da classe lutadores */
        $this->lutador2->status();
    }
}

$bolsonaro = new Lutadores("Bolsonaro"); /* criando os dois persogens e mandando os valores para classe lutadores */
$lula = new Lutadores("Lula");

$jogo = new Jogo($bolsonaro, $lula); /* incluindo as variaveis de cada personagem para dentro da classe jogo */
$jogo->iniciar();

$bolsonaro->facada($lula);
$lula->tiro($bolsonaro);
$bolsonaro->habilidEspecial($lula);
$jogo->status();


