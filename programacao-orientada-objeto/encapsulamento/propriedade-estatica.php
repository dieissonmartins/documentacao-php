<?php

//Classe para criar objetos
class Software{
	private $id;
	private $nome;
	public static $contador;

	function __construct($nome){
		self::$contador ++;

		$this->id = self::$contador;
		$this->nome = $nome;
		echo "Software: {$this->id} - {$this->nome} </br>";
	}
}

//criar novos objetos
new Software('Dia');
new Software('Gimp');
new Software('Gnumeric');

echo "Quantidade criada = ".Software::$contador;


?>