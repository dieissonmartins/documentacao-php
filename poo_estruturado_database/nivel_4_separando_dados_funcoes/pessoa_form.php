<?php

require_once('db/pessoa_db.php');

if (!empty($_REQUEST['action'])){
	
	if ($_REQUEST['action'] == 'edit'){
		
		$id 	= (int)$_GET['id'];
		$pessoa = get_pessoa($id);
	}
	else if($_REQUEST['action'] == 'save'){
		
		$pessoa = $_POST;

		if ( empty($_POST['id'])){
			$pessoa['id'] = get_next_pessoa();
			$resultado = insert_pessoa($pessoa);
		}
		else{
			$resultado = update_pessoa($pessoa);
		}
		echo ($resultado)? 'Registro salvo com sucesso' : 'Problemas ao Salvar';
	}
}
else{
	$pessoa 			 = [];
	$pessoa['id']		 ='';
	$pessoa['email'] 	 ='';
	$pessoa['nome'] 	 ='';
	$pessoa['bairro'] 	 ='';
	$pessoa['telefone']  ='';
	$pessoa['endereco']  ='';
	$pessoa['id_cidade'] ='';


}
	require_once('lista_combo_cidades.php');

	$form = file_get_contents('html/form.html');
	$form = str_replace('{id}', $pessoa['id'], $form);
	$form = str_replace('{nome}', $pessoa['nome'], $form);
	$form = str_replace('{endereco}', $pessoa['endereco'], $form);
	$form = str_replace('{bairro}', $pessoa['bairro'], $form);
	$form = str_replace('{telefone}', $pessoa['telefone'], $form);
	$form = str_replace('{email}', $pessoa['email'], $form);
	$form = str_replace('{id_cidade}', $pessoa['id_cidade'], $form);
	$form = str_replace('{cidades}', lista_combo_cidades( $pessoa['id_cidade']), $form);
	echo $form;


?>