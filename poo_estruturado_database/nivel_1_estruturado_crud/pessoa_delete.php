<?php
require_once('conexao_mysql.php');

$dados = $_GET;

if (isset($dados['id'])){
	$sql = "DELETE FROM pessoa WHERE id = '{$dados['id']}'";
	$resultado = mysqli_query($conexao,$sql);

	if ($resultado){
 		echo "Registro deletado com sucesso";
 	}else{
 		echo "erro em deletar o registro";
 	}
}

?>