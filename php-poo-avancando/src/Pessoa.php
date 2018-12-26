<?php

class Pessoa{

	public function setNome($nome){
		
		//verifica se é uma string
		if(!is_string($nome)){
			die('Não é uma String');
		}
		return $nome;
	}

	public function setIdade($idade){

		//verifica se é um valor numerico
		if(!is_numeric($idade)){
			die('Não é um valor Numerico');
		}
		return $idade;
	}
}


?>