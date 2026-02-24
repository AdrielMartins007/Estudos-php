<?php

class Lista{
    public $nota;
    public $nome;
    public static $lista = [];

    public function __construct($nome, $nota){
        if($this->verificar($nome)){
            echo "ERRO, o nome: " . $nome . " ja foi adicionado<br><br>";
            exit; /* se caso ja tiver o nome, o sistema para */
        }

        $this->nome = $nome;
        $this->nota = $nota;

        self::$lista[] = $nome; /* chamando o array que pertence a classe e incluindo todos os nomes dentro do array */
    }

    public function verificar($nome){
        return in_array($nome, self::$lista);
    }

    public function mostrar(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Nome: " . $this->nota . "<br><br>";
    }
}
?>

<?php

$aluno = new Lista("Adriel", 8);
$aluno->mostrar();

$aluno1 = new Lista("Thais", 7);
$aluno1->mostrar();

$aluno2 = new Lista("Fulano", 5);
$aluno2->mostrar();

?>