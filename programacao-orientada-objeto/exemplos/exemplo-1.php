<?php
class Produto{

	
	private $descricao;
	private $preco;

	public function __construct($descricao, $preco){
		$this->descricao = $descricao;
		$this->preco = $preco;
	}

	
	public function setDescricao($valor){
		$this->descricao = $valor;
	}

	
	public function setPreco($valor){
		$this->preco = $valor;
	}

	
	public function getDescricao(){
		return $this->descricao;
	}

	public function getPreco(){
		return $this->preco;
	}

	
	public function getDetalhes(){
		return "O produto {$this->descricao} custa {$this->preco} reais";
	}

}

/*cria novo objeto*/
$p1 = new Produto('livro', 50);

//var_dump($p1);

/*atribui valor a descrição*/
//$p1->setDescricao('livro');
//$p1->setPreco(50);

//var_dump($p1);
echo $p1->getDetalhes();

