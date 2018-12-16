<?php

class Pessoa{
	private $nome;
	private $genero;
	const GENEROS = array('M'=>'Masculino','F' => 'Feminio');

	public function __construct($nome,$genero){
		$this->nome = $nome;
		$this->genero = $genero;
	}

	public function getNome(){
		return $this->nome;
	}
	public function getNomeGenero(){
		return self::GENEROS[$this->genero];
	}
}

$dieisson = new Pessoa('Dieisson Martins dos Santos','M');
$luana = new Pessoa('Luana Ramos Sena','F');

echo 'Nome:'.$dieisson->getNome().'</br>';
echo 'Genero:'.$dieisson->getNomeGenero().'</br></br>';

echo 'Nome:'.$luana->getNome().'</br>';
echo 'Genero:'.$luana->getNomeGenero().'</br>';

var_dump(Pessoa::GENEROS)
?>