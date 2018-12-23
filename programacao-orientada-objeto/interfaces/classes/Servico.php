<?php

class Servico implements OrcavelInterface{
	private $descricao;
	private $preco;

	public function __construct($descricao, $preco){
		$this->preco = $preco;
		$this->descricao = $descricao;
	}
	public function getPreco(){
		return $this->preco;
	}
}

?>