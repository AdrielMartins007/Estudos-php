<?php

/* Criando a interface do controle remoto, aquela que o usuario poderar acessar */
/* Normalmente, seria necessario colocar o abstract antes da function, mas no php moderno nao precisa mais */

interface Controlador{
    public function ligar();

    public function desligar();

    public function abrirMenu();

    public function fecharMenu();

    public function maisVolume();

    public function menosVolume();

    public function ligarMudo();

    public function desligarMudo();

    public function play();

    public function pause();
}
?>