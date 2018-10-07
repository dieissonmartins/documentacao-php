
<?php 

/**
 * objeto Produto
 */

class Produto{
	
	public $descricao;
	public $estoque;
	public $preco;

}

//primeiro objeto 
$produto1 = new Produto;

$produto1->descricao = 'Café';
$produto1->estoque = 10;
$produto1->preco = 7.6;

var_dump($produto1);


//segundo objeto
$produto2 = new Produto;

$produto2->descricao = 'Açucar';
$produto2->estoque	= 15;
$produto2->preco = 33.6;

var_dump($produto2);


?>