<?php

class Pessoa{
	protected $nome;

	public function __construct($nome){
		$this->nome = $nome;
	}
}

class Funcionario extends Pessoa{
	private $cargo;
	private $salario;

	public function contrata($cargo, $salario){
		if(is_numeric($salario) and $salario > 0){
			$this->cargo = $cargo;
			$this->salario = $salario;
		}
	}
	public function getInfo(){
		return "Nome: {$this->nome} </br> Salário: R$ {$this->salario},00";
	}
}

$pessoa = new Funcionario('Dieisson Martins dos Santos');
$pessoa->contrata('Programador de Sistemas de Informação','1423');

echo $pessoa->getInfo();
?>