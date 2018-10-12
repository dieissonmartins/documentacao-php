<?php

class Produto{

	private $descricao;
	private $estoque;
	private $preco;

	function setDescricao($descricao){
		if ( is_string($descricao)){
			$this->descricao = $descricao;
		}
	}

	function getDescricao(){
		return $this->descricao;
	}

	function setEstoque($estoque){
		if(is_numeric($estoque) and $estoque >0 ){
			$this->estoque = $estoque;
		}
	}

	public function getEstoque(){
		return $this->estoque;
	}

}

	$produto1 = new Produto;
	$produto1->setDescricao('cafe');
	$produto1->setEstoque(10);
	
		echo 'Descrição:'.$produto1->getDescricao().'</br>';
		echo 'Estoque:'.$produto1->getEstoque().'</br>';





?>