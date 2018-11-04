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
	echo "Saldo {$conta->getSaldo()} </br>";

	$conta->depositar(332);
	echo "Desposito de 200 </br>";
	echo "Saldo Atual: {$conta->getSaldo()} </br>";
	if($conta->retirar(700)){
		echo "retirada de 700 </br>";
	}else{
		echo "retirada de 700 não permitida </br>";
	}
	echo "Saldo Atual: {$conta->getSaldo()} </br>";
}


?>