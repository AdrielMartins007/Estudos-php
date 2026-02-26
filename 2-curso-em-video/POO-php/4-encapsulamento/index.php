<?php 

require_once 'Controle-remoto.php';

$user = new ControleRemoto();
$user->ligar();
$user->play();
$user->abrirMenu();
$user->pause();
$user->abrirMenu();
$user->play();
$user->abrirMenu();
$user->menosVolume();
$user->menosVolume();
$user->menosVolume();
$user->ligarMudo();
$user->abrirMenu();
$user->desligar();

?>