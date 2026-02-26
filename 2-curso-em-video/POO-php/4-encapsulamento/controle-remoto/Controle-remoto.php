<?php
require_once 'interface.php'; /* importando as funcoes da interface */

class ControleRemoto implements Controlador /* implementando as funcoes da interface para dentro da classe */
{
    private $volume; /* Atributos da classe controle remoto*/
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->volume = 50; /* Assim que instanciarmos esse objeto, ele vai receber esses valores automaticamente */
        $this->ligado = false;
        $this->tocando = false;
    }

    private function ligado($ligado) /* criando a funcao do controle remoto aonde vai receber o valor pela variavel $ligado */
    {
        $this->ligado = $ligado; /* incluindo o valor dentro do atributo */
    }

    private function getLigado() /* funcao que retorna o valor dentro da variavel */
    {
        if ($this->ligado == true) {
            return "Sim"; /* se caso ligado receber o valor 'true', ele retorna como mensagem 'sim' */
        } else {
            return "Nao"; /* retorna o valor 'nao' caso nao receba o valor true */
        }
    }

    private function volume($volume) /* criando a funcao de volume dentro da classe controle e recebendo o valor pela variavel*/
    {
        $this->volume = $volume;
    }

    private function getVolume() /* funcao para exibir o retorno do valor volume */
    {
        return $this->volume . "%"; /* recebendo o valor e incluindo a string '%' no final do valor inteiro */
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


    /* Aqui vamos implementar as funcoes da interface que criamos */

    public function ligar()
    {
        if ($this->ligado == false) { /* funcao que verifica se o dispositivo ta ligado */
            $this->ligado($this->ligado = true); /* se caso esteja ligado, ele enviar o valor para dentro da variavel $ligado dentro da funcao ligar do controle*/
            echo "Ligando...<br>";
        } else {
            echo "O dispositivo ja esta ligado!<br>"; /* se caso, receber valor 'true', isso quer dizer que ta ligada e que nao vai executar a funcao */
        }
    }

    public function desligar()
    {
        if ($this->ligado == true) { /* verificação */
            $this->ligado($this->ligado = false); /* enviando o valor para dentro da variavel $ligado da classe controle remoto*/
            echo "Desligando...<br>";
        } else {
            echo "O dispositivo ja esta desligado!<br>"; /* mensagem se caso receber valor contrario */
        }
    }

    public function abrirMenu() /* funcao para mostrar todos os valores das variaveis que criamos para classe controle remoto ; $volume, $ligado e $tocando */
    {
        echo "<br>Ligado: " . $this->getLigado() . "<br>"; /* chamando a funco que retorna o valor atual da variavel */
        echo "Volume: " . $this->getVolume() . "<br>";
        echo "Tocando: " . $this->getTocando() . "<br><br>";
    }

    public function fecharMenu()
    {
        echo "Fechando o menu...<br>";
    }

    public function maisVolume() /* funcao para aumentar o valor do int de volume */
    {
        if ($this->ligado == true) { /* verificação se está ou nao ligada */
            $this->volume($this->volume += 5); /* incluindo mais 5 para dentro do valor da variavel volume, ou seja, ele vai somar mais 5 */
            echo "Aumentando...<br>";
        } else {
            echo "Televisao desligada<br>";
        }
    }

    public function menosVolume()
    {
        if ($this->ligado == true) {
            $this->volume($this->volume -= 5); /* ja aqui, como é pra diminuir, ele vai reduzir 5 do valor dentro da variavel volume */
            echo "Diminuindo...<br>";
        } else {
            echo "Televisao desligada<br>";
        }

        if ($this->volume < 0) {
            $this->volume($this->volume = 0);
        }
    }

    public function ligarMudo() /* funcao ligar mudo */
    {
        if ($this->tocando == true && $this->volume > 0) { /* verifica duas coisas, se está tocando e se o valume é maior que o valor 0 */
            $this->tocando(false); /* caso sim, ele inclui o valor 'false' para dentro da variavel $tocando */
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
