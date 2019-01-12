<?php
require_once('conexao_mysql.php');

if (!empty($_REQUEST['action'])){
	
	if ($_REQUEST['action'] == 'edit'){
		$id 		= (int) $_GET['id'];
		$resultado 	= mysqli_query($conexao, "SELECT * FROM pessoa WHERE id='{$id}'");
		$pessoa 	= mysqli_fetch_assoc($resultado);
	}
	else if($_REQUEST['action'] == 'save'){
		$pessoa 	= $_POST;
		if (empty($_POST['id'])){
			$resultado	= mysqli_query($conexao, "SELECT max(id) as next FROM pessoa");
			$next 		= (int) mysqli_fetch_assoc($resultado)['next'] +1;

			$sql 		= "INSERT INTO pessoa(id,nome,endereco,bairro,telefone,email,id_cidade)
					   VALUES('{$next}','{$pessoa['nome']}','{$pessoa['endereco']}','{$pessoa['bairro']}','{$pessoa['telefone']}','{$pessoa['email']}','{$pessoa['id_cidade']}')";
			$resultado = mysqli_query($conexao, $sql);	
		}else{
			$sql = "UPDATE pessoa SET
							nome 	 	='{$pessoa['nome']}',
							endereco 	='{$pessoa['endereco']}',
 							bairro 	 	='{$pessoa['bairro']}',
 							telefone 	='{$pessoa['telefone']}',
 							email 	 	='{$pessoa['email']}',
 							//id_cidade	='{$pessoa['id_cidade']}'
 							WHERE id 	='{$pessoa['id']}'";
 			$resultado = mysqli_query($conexao, $sql);
		}
		echo ($resultado)?'Registro salvo com sucesso' : 'erro ao salvar o registro';
	}
}else{
	$pessoa = [];
	
	$pessoa['id']		='';
	$pessoa['nome']		='';
	$pessoa['bairro']	='';
	$pessoa['email']	='';
	$pessoa['endereco']	='';
	$pessoa['telefone']	='';
	$pessoa['id_cidade']='';
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
$from = str_replace('{cidades}', lista_combo_cidades( $pessoa['id_cidade']), $form);
echo $form;

?>