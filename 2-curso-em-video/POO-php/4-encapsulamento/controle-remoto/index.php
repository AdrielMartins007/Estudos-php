<?php 

require_once 'Controle-remoto.php'; /* importando os dados da classe controle remoto */

$user = new ControleRemoto(); /* criando o objeto para instanciarmos */
$user->ligar(); /* chamando todas as funções... */
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