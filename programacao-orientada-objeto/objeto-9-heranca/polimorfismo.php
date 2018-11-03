<?php

require_once('classes/Conta.php');
require_once('classes/ContaCorrente.php');
require_once('classes/ContaPoupanca.php');

//criar Objetos
$contas = array();

$contas[] = new ContaCorrente(1234,"PP.4321.45",100,500);
$contas[] = new ContaPoupanca(3333,"WW.4323.75",100);

foreach ($contas as $key => $conta){
	echo "Conta {$conta->getInfo()} </br>";
	echo "Saldo {$conta->getInfo()} </br>";
}


?>