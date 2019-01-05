<?php
require_once('conexao_mysql.php');

function lista_combo_cidades($id = NULL){
	global $conexao;
	$query = "SELECT DISTINCT id,nome FROM cidade";
	$output = ''; 

	$resultado = mysqli_query($conexao,$query);

	if($resultado){
		while ($linha = mysqli_fetch_assoc($resultado)) {
			$check = ($linha['id'] == $id)? 'selected=1':'';
			$output .= "<option $check value'{$linha['id']}'> {$linha['nome']} </option>";
		}
	}
	return $output; 
}

$teste = lista_combo_cidades();
echo $teste;

?>