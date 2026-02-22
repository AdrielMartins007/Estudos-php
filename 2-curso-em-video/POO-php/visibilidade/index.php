<?php 

    require_once 'Carro.php';
    
    $car1 = new Carros;
    $car1->novo = true;
    $car1->cor = "Branco";
    $car1->chave = true; /* PROTEGIDO */
    $car1->motor = true; /* PROTEGIDO */
    $car1->modelo = "Fiat-uno"; /* PRIVADO */

    $car1->ligar(); /* PRIVADO */
    $car1->mensagem();
    $car1->vender(); /* PRIVADO */
    $car1->revisao();
    $car1->tipo();

?>