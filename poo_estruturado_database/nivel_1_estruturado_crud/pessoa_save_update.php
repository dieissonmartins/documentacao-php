<?php
require_once('conexao_mysql.php');

$dados = $_POST;

if ($dados['id']){
	$sql = "UPDATE pessoa SET
	nome 	 	='{$dados['nome']}',
	endereco 	='{$dados['endereco']}',
 	bairro 	 	='{$dados['bairro']}',
 	telefone 	='{$dados['telefone']}',
 	email 	 	='{$dados['email']}',
 	id_cidade	='{$dados['id_cidade']}'
 	where id 	='{$dados['id']}'";

 	$resultado = mysqli_query($conexao,$sql);

 	if ($resultado){
 		echo "Registro editado com sucesso";
 	}else{
 		echo "erro registro não editado";
 	}
}

?>