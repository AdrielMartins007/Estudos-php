<?php 

class Pessoa{
    public $nome;
    public $idade;
    public $genero;

    public function __construct($nome, $idade, $genero) /* DEFININDO O CONSTRUTOR (EXECUTA AUTOMATICAMENTE AO CRIAR O OBJETO) */
    {

    $this->nome = $nome; /* ATRIBUINDO OS VALORES RECEBIDOS AOS ATRIBUTOS DO OBJETO */
    $this->idade = $idade;
    $this->genero = $genero;

    }
}

?>