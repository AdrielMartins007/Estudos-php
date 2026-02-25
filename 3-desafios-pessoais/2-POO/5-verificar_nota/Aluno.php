<?php

class Aluno{
    public $nome;
    public $nota;
    public static $dados = [];

    public function __construct($nome, $nota)
    {
        $this->nome = $nome;
        $this->nota = $nota;

        self::$dados[] = [
            'nome' => $nome,
            'nota' => $nota,
        ];
    }

    public function verificar(){
        if($this->nota < 6){
            echo "Aluno: " . $this->nome . "<br>Nota: " .  $this->nota . "<br>REPROVADO<br><br>";
        } else if($this->nota > 6 && $this->nota < 7){
            echo "Aluno: " . $this->nome . "<br>Nota: " .  $this->nota .  "<br>RECUPERAÇÃO<br><br>";
        } else {
            echo "Aluno: " . $this->nome . "<br>Nota: " .  $this->nota .  "<br>APROVADO<br><br>";
        }
    }
}
?>

<?php

$user1 = new Aluno("Adriel", 10);
$user1->verificar();

$user2 = new Aluno("Adriel", 8);
$user2->verificar();

$user3 = new Aluno("Adriel", 6.5);
$user3->verificar();

$user4 = new Aluno("Adriel", 4);
$user4->verificar();

$user5 = new Aluno("Adriel", 10);
$user5->verificar();

?>