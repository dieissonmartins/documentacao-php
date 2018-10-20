<?php

class Produto{
	private $descricao;
	private $estoque;
	private $preco;

	public function __construct($descricao, $estoque, $preco){
		if(is_string($descricao)){
			$this->descricao = $descricao;
		}
		if(is_numeric($estoque) and $estoque > 0){
			$this->estoque = $estoque;
		}
		if (is_numeric($preco) and $preco > 0) {
			$this->preco = $preco;
		}
	}

	public function getDescricao(){
		return $this->descricao;
	}
	public function getEstoque(){
		return $this->estoque;
	}
	public function getPreco(){
		return $this->preco;
	}
}
	
	$produto = new Produto('cafe', 30, 12);

	echo 'Descricao: '.$produto->getDescricao().'</br>';
	echo 'Estoque: '.$produto->getEstoque().'</br>';
	echo 'Preco: '.$produto->getPreco().'</br>';



?>