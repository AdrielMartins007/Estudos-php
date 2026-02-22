<?php 

    require_once 'Carro.php';
    
    $car1 = new Carros;
    $car1->novo = true;
    $car1->cor = "Branco";

    $car1->mensagem();
    $car1->revisao();
    $car1->tipo();

?>