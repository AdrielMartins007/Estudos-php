<?php 

require_once 'Moto.php';

$moto = new Moto();

$moto->setModelo("Factor");
$moto->setAno(2002); /* ACESSANDO E MODIFICANDO A VARIAVEL, MESMO SENDO PRIVADA */

print_r($moto);

?>