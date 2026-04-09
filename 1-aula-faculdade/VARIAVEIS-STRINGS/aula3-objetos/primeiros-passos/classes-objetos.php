<?php

class pessoa
{ /* CRIAÇÃO DA CLASSE PESSOA */
    public $nome; /* CRIAÇÃO DAS PROPRIEDADES DA CLASSE */
    public $idade;

    public function __construct($nome, $idade,) /* CHAMANDO A FUNCAO CONSTRUCT PARA INFORMAR OS VALORES DAS VARIAVEIS */
    {
        $this->nome = $nome; /* CHAMANDO AS VARIAVEIS, USANDO O THIS PARA CHAMAR AS PROPRIEDADES DAS VARIAVEIS E INCUIR OS VALORES DENTRO DELA */
        $this->idade = $idade;
    }

    public function mensagem() /* CRIANDO A FUNCAO DE MENSAGEM */
    {
        echo "<h3>Meu nome é $this->nome e tenho $this->idade anos<br><br>"; /* DECLARANDO A MENSAGEM E INCLUINDO AS PROPRIEDADES NELA ELA */
    }
}

$pessoa1 = new pessoa("Adriel", 23); /* INCLUINDO VALORES DENTRO DAS VARIAVEIS */ 
$pessoa1->mensagem(); /* CHAMANDO A FUNCAO DE MENSAGEM COM OS VALORES JA INCLUSO NELA */

?>