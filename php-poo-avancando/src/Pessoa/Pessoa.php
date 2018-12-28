<?php

namespace DieissonMartins\Pessoa;

class Pessoa{

	private $nome;
	private $idade;
	private $altura;

	public function __construct(){
		echo 'Classes instanciada </br>';
	}

	//call dispara se o metodo for protegido 
	//protected function setNome($nome){
	public function setNome($nome){
		
		//verifica se é uma string
		//if(!is_string($nome)){
		//	die('Não é uma String');
		//}
		//return $nome;
		$this->nome = $nome;
	}

	public function setIdade($idade){

		//verifica se é um valor numerico
		//if(!is_numeric($idade)){
		//	die('Não é um valor Numerico');
		//}
		//return $idade;
		$this->idade = $idade;
	}
	public function setAltura($altura){

		//verifica se é um valor e flutuante
		//if(!is_float($altura)){
		//	die('Não é um valor Flutuante');
		//}
		//return $altura;
		$this->altura = $altura;
	}

	public function __set($propriedade, $valor){
		var_dump($propriedade, $valor);
	}

	//metodo magico Call()
	//public function __call($metodo, $propriedades){
	//	var_dump($metodo, $propriedades);
	//}

	//metodo magico toString()
	//public function __toString() :string{
	//	//return 'retorna metodo classe em um string';
	//	return implode(';', $this->setNome() );
	//}
}


?>