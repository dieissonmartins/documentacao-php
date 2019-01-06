<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Pessoas</title>
	<link rel="stylesheet" type="text/css" href="css/list.css">
</head>
<body>
	<div class="container">
	<?php
	require_once('conexao_mysql.php');
	$resultado = mysqli_query($conexao,"SELECT * FROM pessoa ORDER BY id");
	
	echo '<table border=1>';
	echo '<thead>';
	echo '<tr>';
	echo '<th> </th>';
	echo '<th> </th>';
	echo '<th> Id </th>';
	echo '<th> Nome </th>';
	echo '<th> Endereço </th>';
	echo '<th> Bairro </th>';
	echo '<th> Telefone </th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';

	while ($linha = mysqli_fetch_assoc($resultado)){
		$id 		= $linha['id'];
		$nome 		= $linha['nome'];
		$endereco 	= $linha['endereco'];
		$bairro 	= $linha['bairro'];
		$telefone 	= $linha['telefone'];
		$email 		= $linha['email'];
		$id_cidade 	= $linha['id_cidade'];

		echo'<tr>';

		echo"<td aling='center'>
			 	<a href='pessoa_form_edit.php?id={$id}'>
			 	 	<p style='width:17px'>O</p>
			 	</a>
			 </td>
		";
		echo"<td aling='center'>
			 	<a href='pessoa_delete.php?id={$id}'>
			 	 	<p style='width:17px'>X</p>
			 	</a>
			 </td>
		";
		echo "<td>{$id}</td>";
		echo "<td>{$nome}</td>";
		echo "<td>{$endereco}</td>";
		echo "<td>{$bairro}</td>";
		echo "<td>{$telefone}</td>";
		echo "</tr>";
	}
		echo "</tbody>";
		echo "</table>";
	?>
	<button onclick="window.location='pessoa_form_insert.php'">
		<p>INSERIR</p>
	</button>
	</div>
</body>
</html>