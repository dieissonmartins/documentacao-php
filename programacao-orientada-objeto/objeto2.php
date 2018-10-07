
<?php 

/**
 * objeto Produto
 */

class Produto{
	
	public $descricao;
	public $estoque;
	public $preco;

	//aumenta estoque
	public function aumentarEstoque( $unidades ){

		if(is_numeric($unidades) and $unidades >=0){

			$this->estoque += $unidades;

		}

	}

	//diminui estoque
	public function diminuirEstoque( $unidades  ){

		if (is_numeric($unidades) and $unidades >= 0) {
			
			$this->estoque -= $unidades;

		}
	}

		//reajusta preço do produto
	public function reajustarPreco( $percentual ){

		if (is_numeric($percentual) and $percentual >= 0) {

			$this->preco *= (1+($percentual/100));
			
		}
	}
}

//primeiro objeto 
$produto1 = new Produto;

$produto1->preco = 7.6;
$produto1->descricao = 'Café';
$produto1->estoque = 10;

//valor inicial do produto
echo "O estoque de {$produto1->descricao} é {$produto1->estoque} <br>\n";
echo "O preco de {$produto1->descricao} é {$produto1->preco} <br>\n";

//metodos da classe produto
$produto1->aumentarEstoque(10);
$produto1->diminuirEstoque(5);
$produto1->reajustarPreco(50);


//valor pos-reajuste do produto
echo "O estoque de {$produto1->descricao} é {$produto1->estoque} <br>\n";
echo "O preco de {$produto1->descricao} é {$produto1->preco} <br>\n";





//mostrar dados do objeto produto 1
var_dump($produto1);



?>