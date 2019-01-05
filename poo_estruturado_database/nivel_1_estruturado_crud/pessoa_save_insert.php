<?php
require_once('conexao_mysql.php');

$dados = $_POST;
$resultado = mysqli_query($conexao,"SELECT max(id) as next FROM pessoa");
$next = (int) mysqli_fetch_assoc($resultado)['next']+1;

$sql = "INSERT INTO pessoa (id,
 	 				nome,
 	 				endereco,
 	 				bairro,
 	 				telefone,
 	 				email,
 	 				id_cidade)
 	 						VALUES ('{$next}',
 	 						'{$dados['nome']}',
 	 						'{$dados['endereco']}',
 	 						'{$dados['bairro']}',
 	 						'{$dados['telefone']}',
 	 						'{$dados['email']}',
 	 						'{$dados['id_cidade']}')";
$resultado = mysqli_query($conexao,$sql);

if ($resultado){
	echo "Registro inserido com sucesso";
}else{
	//echo mysqli_last_error();
}

var_dump($dados);
?>