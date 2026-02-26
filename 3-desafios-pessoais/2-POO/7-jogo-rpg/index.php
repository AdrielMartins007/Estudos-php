<?php 

class Personagem{
    public $nome; /* nome do personagem */
    public $vida; /* barra de vida do personagem */
    public $arma;

    public static $inventario = []; /* array aonde será armazenados os itens do inventário do personagem */

    public function __construct($nome) /* variavel que vai receber o nome do personagem */
    {
        $this->nome = $nome;
        $this->vida = 200; /* barra de vida do personagem */
        $this->arma = "";
    }

    public function pegar($item){ /* funcao de pegar item e incluir no inventario*/
        self::$inventario[] = [
            'item' => $item
        ];

        echo "O item " . $item . " foi incluido no inventario<br><br>";
    }

    public function listarItens(){ /* funcao para listar todos os itens do inventario */
        echo "Inventario: <br>";

        foreach(self::$inventario as $mostrar){
            echo $mostrar['item'] . "<br>";
        }
    }

    public function equipar($arma){ /* funcao para equipar o personagem com alguma arma do inventario */
        if($arma == ""){
            echo "Sua arma atual é: Punhos<br>";
        } else {
            $this->arma = $arma;
            echo "Sua arma atual é: " . $arma;
        }
    }
}

class Jogo{
    public $jogador; /* criação da variavel para o jogador */

    public function __construct($pessoa)
    {
        $this->jogador = $pessoa;
    }

    public function iniciar(){ /* funcao para iniciar o jogo */
        echo "Olá " . $this->jogador->nome . "...<br>";
        echo "Bem vindo... e vamos começar...<br><br>";
    }
}

$Adriel = new Personagem("Adriel");

$jogo = new Jogo($Adriel);
$jogo->iniciar();

$Adriel->pegar("Espada");
$Adriel->pegar("Escudo");
$Adriel->pegar("Lança");
$Adriel->pegar("Corda");
$Adriel->pegar("Machado");
$Adriel->listarItens();
$Adriel->equipar("Espada");

?>