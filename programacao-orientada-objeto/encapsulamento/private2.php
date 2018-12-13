<?php

class Pessoa{
	private $nome;
	private $endereco;
	private $nascimento;

	public function __construct($nome,$endereco){
		$this->nome = $nome;
		$this->endereco = $endereco;
	}
	public function setNacimento($nascimento){
		$partes = explode('-', $nascimento);
		if(count($partes) == 3){
			if(checkdate($partes[1], $partes[2], $partes[0])){
				$this->nascimento = $nascimento;
					return TRUE;
			}
			return FALSE;
		}
		return FALSE;
	}
}

$pessoa1 = new Pessoa('Dieisson Martins dos Santos','Rua Manoel Tome');

if($pessoa1->setNacimento('01 de maio de 2015')){
	echo"Atribuiu 01 de maio de 2015</br>";
}else{
	echo"Não Atribuiu 01 de maio de 2015</br>";
}

if($pessoa1->setNacimento(date('Y-m-d'))){
	echo"Atribuiu ".date('Y-m-d')."</br>";
}else{
	echo"Não Atribuiu ".date('Y-m-d')."</br>";
}
//$pessoa1->telefone ='+55 33 988643983';
//var_dump($pessoa1);

?>