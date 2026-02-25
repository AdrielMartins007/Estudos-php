<?php

class JogoLuta{

    public $lut1; /* lutador numero 1 */
    public $lut2; /* lutador numero 2 */
    public $lut1Vida;
    public $lut2Vida;
    public $lut1Forca;
    public $lut2Forca;

    public function __construct($lut1, $lut2)
    {
        $this->lut1 = $lut1;
        $this->lut2 = $lut2;
        $this->lut1Vida = 100;
        $this->lut2Vida = 100;
        $this->lut1Forca = 100;
        $this->lut2Forca = 100;
    }

    public function iniciar(){
        echo "TODOS PRONTOS? LUTEM...<br><br>";
    }

    public function atqBolso(){

        echo $this->lut1 . " ATACOU...<br><br>";

        $this->lut2Vida += 10;
        $this->lut1Vida -= 10;
        
        echo $this->lut1 . ": Tome seu cachaceiro<br>";
        echo $this->lut2 . ": Calma companheiro<br><br>";

        echo "Status:<br>";
        echo "lutador: " . $this->lut1 . "<br>Vida: " . $this->lut2Vida . "<br>";
        echo "Lutador: " . $this->lut2 . "<br>Vida: " . $this->lut1Vida . "<br><br>";
    }

    public function atqLula(){
        echo $this->lut2 . " ATACOU...<br><br>";

        $this->lut1Vida += 10;
        $this->lut2Vida -= 10;
        
        echo $this->lut2 . ": Toma bolsominion<br>";
        echo $this->lut1 . ": Ai, seu filho da put#<br><br>";

        echo "Status:<br>";
        echo "lutador: " . $this->lut1 . "<br>Vida: " . $this->lut2Vida . "<br>";
        echo "Lutador: " . $this->lut2 . "<br>Vida: " . $this->lut1Vida;
    }
}
?>

<?php

$user1 = new JogoLuta("BOLSONARO", "LULA");
$user1->iniciar();
$user1->atqBolso();
$user1->atqLula();

?>