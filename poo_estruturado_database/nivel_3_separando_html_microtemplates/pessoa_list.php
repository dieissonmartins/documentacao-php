<?php
require_once('conexao_mysql.php');

if (!empty($_GET['action']) AND $_GET['action'] == 'delete'){
	$id = (int) $_GET['id'];
	$resultado = mysqli_query($conexao,"DELETE FROM pessoa WHERE id='{$id}'");
}
	$resultado = mysqli_query($conexao,"SELECT * FROM pessoa ORDER BY id");
	$items = '';

	while ($linha = mysqli_fetch_assoc($resultado)){
		$item = file_get_contents('html/item.html');
		$item = str_replace('{id}', $linha['id'], $item);
		$item = str_replace('{nome}', $linha['nome'], $item);
		$item = str_replace('{endereco}', $linha['endereco'], $item);
		$item = str_replace('{bairro}', $linha['bairro'], $item);
		$item = str_replace('{telefone}', $linha['telefone'], $item);

		$items.= $item;
	}

	$list = file_get_contents('html/list.html');
	$list = str_replace('{items}', $items, $list);
	echo $list;

?>