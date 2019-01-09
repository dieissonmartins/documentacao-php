<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Pessoa</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
	<?php
	require_once('conexao_mysql.php');

	if ( !empty($_GET['id']) ){

		$id = (int) $_GET['id'];
		$resultado = mysqli_query($conexao,"SELECT * FROM pessoa WHERE id='{$id}'");
		$linha = mysqli_fetch_assoc($resultado);

		$id 		= $linha['id']; 
		$nome 		= $linha['nome']; 
		$endereco 	= $linha['endereco']; 
		$bairro 	= $linha['bairro']; 
		$telefone 	= $linha['telefone']; 
		$email 		= $linha['email']; 
		$id_cidade 	= $linha['id_cidade'];
	} 
	?>
</body>
	<div class="container">
		<form enctype="multipart/form-data" method="post" action="pessoa_save_update.php">
			
			<label>Código</label>
			<input name="id" type="text" readonly="1" style="width: 30%" value="<?=$id?>">
			
			<label>Nome</label>
			<input name="nome" type="text" style="width: 50%" value="<?=$nome?>">

			<label>Endereço</label>
			<input name="endereco" type="text" style="width: 50%" value="<?=$endereco?>">

			<label>Bairro</label>
			<input name="bairro" type="text" style="width: 50%" value="<?=$bairro?>">

			<label>Telefone</label>
			<input name="telefone" type="text" style="width: 50%" value="<?=$telefone?>">


			<label>Email</label>
			<input name="email" type="text" style="width: 50%" value="<?=$email?>">

			<label>Cidade</label>
			<select name="id_cidade" style="width: 25%">
				<?php
				require_once('lista_combo_cidades.php');
				echo lista_combo_cidades($id_cidade);
				?>
			</select>
		
			<input type="submit" value="Editar Dados">
		</form>
	</div>
</html>