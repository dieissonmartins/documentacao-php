<?php

class Produto implements OrcavelInterface{
	
	private $descricao;
	private $estoque;
	private $preco;
	//...

	public function __construct($descricao,$estoque,$preco){
		$this->estoque = $estoque;
		$this->descricao = $descricao;
		$this->preco = $preco;
	}

	public function getPreco(){
		return $this->preco;
	}

}

?>