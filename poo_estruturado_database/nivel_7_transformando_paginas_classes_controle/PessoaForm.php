<?php
require_once('classes/Pessoa.php');
require_once('classes/Cidade.php');

class PessoaForm{
	
	private $html;
	private $data;

	public function __construct(){

		$this->html = file_get_contents('html/form.html');
		$this->data = [
			'id' 		=> NULL, 
			'nome' 		=> NULL,
			'enderero' 	=> NULL,
			'bairro' 	=> NULL,
			'telefone' 	=> NULL,
			'email' 	=> NULL,
			'id_cidade' => NULL
		];

		$cidade ='';

		foreach (Cidade::all() as $cidade){
			$cidades .= "<option vallue='{$cidade['id']}'> {$cidade['nome']} </option>";
		}
		$this->html = str_replace('{codades}', $cidades, $this->html);
	}

	public function edit($param){

		try{
			$id 	= (int)$param['id'];
			$pessoa = Pessoa::find($id);
			$this->data = $pessoa;
		}

		catch(Exception $e){
			print $e->getMessage;
		}
	}

	public function save($param){

		try{
			Pessoa::save($param);
			$this->data = $param;
			echo "Pessoa Salva com sucesso";
		}

		catch{
			echo $e->getMessage();
		}
	}

	public function show(){

		$form = str_replace('{id}', 		$this->data['id'], 			$this->html);
		$form = str_replace('{nome}', 		$this->data['nome'], 		$this->html);
		$form = str_replace('{endereco}', 	$this->data['endereco'], 	$this->html);
		$form = str_replace('{bairro}', 	$this->data['bairro'], 		$this->html);
		$form = str_replace('{telefone}', 	$this->data['telefone'], 	$this->html);
		$form = str_replace('{email}', 		$this->data['email'], 		$this->html);
		$form = str_replace('{id_cidade}', 	$this->data['id_cidade'], 	$this->html);

		$this->html = str_replace("option value='{$this->data['id_cidade']}'","option selected=1 value='{$this->data['id_cidade']}'", $this->html);

		echo $this->html;
	}
}

?>