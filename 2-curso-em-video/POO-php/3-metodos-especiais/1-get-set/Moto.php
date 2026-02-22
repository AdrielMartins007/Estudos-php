<?php 

/*

METODOS ESPECIAIS

GETTERS - Metodo de acesso ou pegar algum atributo.

SETTERS - Metodo de modificação a um atributo.

CONSTRUCT - Metodo que instancia valores sem que o usuario precisar chamar e incluir toda vez, é como se ele colocasse os valores das variaveis como padrao em cada novo objeto dentro da classe.

*/

class Moto{
    public $modelo;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m; 
    }

    public function getAno(){
        return $this->ano;
    }

    public function setAno($a){ /* USANDO O METODO SET PRA ACESSAR E MODIFICAR UMA VARIAVEL PRIVATE, MESMO EM OUTRO ARQUIVO */
        $this->ano = $a;
    }

}

?>