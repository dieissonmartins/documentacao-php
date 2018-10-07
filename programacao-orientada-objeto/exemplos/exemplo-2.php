<?php

//exemplo 2---------------------------------------------/

class Fabricante{

	private $nome;

	public function __construct($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}
}



class Produto{

	/*atributos da classe*/
	private $descricao;
	private $preco;
	private $fabricante; 

	/*metodo construtor*/
	public function __construct($descricao, $preco, Fabricante $fabricante){
		$this->descricao = $descricao;
		$this->preco = $preco;
		$this->fabricante = $fabricante;
	}

	/*metodo de imprimir valoeres na tela*/
	public function getDetalhes(){
		return "O produto {$this->descricao} custa {$this->preco} reais. Fabricante: {$this->fabricante->getNome()}";
	}
}

/*cria novo objeto*/
$f1 = new Fabricante('Editora B');

$p2 = new Produto('livro', 50, $f1);

//var_dump($p2);

echo $p2->getDetalhes();

// fim do exemplo 2-------------------------------------/









?>