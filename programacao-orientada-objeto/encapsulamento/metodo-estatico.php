<?php

//classe para criar objeto
class Software{
	private $id;
	private $nome;
	private static $contador;

	function __construct($nome){
		self::$contador ++;
		$this->id = self::$contador;
		$this->nome = $nome;

		echo "Software {$this->id} - {$this->nome} </br>";
	}

	public static function getContador(){
		return self::$contador;
	}
}

//objetos criados
new Software('facebook');
new Software('Instagram');
new Software('Google ++');
new Software('Unterlale');
new Software('SysKely');
new Software('Luana_plugin');

echo 'Quantidade criada = '. Software::getContador();


?>