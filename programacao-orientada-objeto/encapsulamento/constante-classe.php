<?php

class Pessoa{
	private $nome;
	private $genero;
	private $idade;
	const GENEROS = array('M'=>'Masculino','F' => 'Feminio');

	public function __construct($nome,$genero,$idade){
		$this->nome = $nome;
		$this->genero = $genero;
		$this->idade = $idade;
	}

	public function getNome(){
		return $this->nome;
	}
	public function getNomeGenero(){
		return self::GENEROS[$this->genero];
	}
	public function getIdade(){
		return $this->idade;
	}
}

$dieisson = new Pessoa('Dieisson Martins dos Santos','M',21);
$luana = new Pessoa('Luana Ramos Sena','F',18);

echo 'Nome:'.$dieisson->getNome().'</br>';
echo 'Genero:'.$dieisson->getNomeGenero().'</br>';
echo 'Idade:'.$dieisson->getIdade().'</br></br>';

echo 'Nome:'.$luana->getNome().'</br>';
echo 'Genero:'.$luana->getNomeGenero().'</br>';
echo 'Idade:'.$luana->getIdade().'</br>';

var_dump(Pessoa::GENEROS);
?>