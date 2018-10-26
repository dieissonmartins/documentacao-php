<?php

/**
 * class de Operações 
 */

class Operacoes{

	private $valor1;
	private $valor2;

	function __construct($v1,$v2){
	
		if(is_numeric($v1) and is_numeric($v2)){
		 	$this->valor1  =$v1; 
		 	$this->valor2  =$v2;
		 } 
	}

	function somar(){
		return $this->valor1+$this->valor2;
	}

	function subtrair(){
		return $this->valor1-$this->valor2;
	}

	function dividir(){
		return $this->valor1/$this->valor2;
	}

	function multiplicar(){
		return $this->valor1*$this->valor2;
	}
}

$conta = new Operacoes(4,2);

echo 'A soma é '.$conta->somar().'</br>';

echo 'A sud é '.$conta->subtrair().'</br>';

echo 'A div é '.$conta->dividir().'</br>';

echo 'A multi é '.$conta->multiplicar().'</br>';

?>