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

	$id = $nome = $endereco = $bairro = $telefone = $email = $id_cidade = '';

	if (!empty($_REQUEST['action'] )){
		
		if ($_REQUEST['action'] == 'edit'){
			$id = (int) $_GET['id'];
			$resultado = mysqli_query($conexao,"SELECT * FROM pessoa WHERE id='{$id}'");

			if ($linha = mysqli_fetch_assoc($resultado)){
				
				$id 		= $linha['id']; 
				$nome 		= $linha['nome']; 
				$endereco 	= $linha['endereco']; 
				$bairro 	= $linha['bairro']; 
				$telefone 	= $linha['telefone']; 
				$email 		= $linha['email']; 
				$id_cidade 	= $linha['id_cidade'];				
			}
		}else if($_REQUEST['action'] == 'save'){
			$id 		= $_POST['id']; 
			$nome 		= $_POST['nome']; 
			$endereco 	= $_POST['endereco']; 
			$bairro 	= $_POST['bairro']; 
			$telefone 	= $_POST['telefone']; 
			$email 		= $_POST['email']; 
			$id_cidade 	= $_POST['id_cidade'];

			if (empty($_POST['id'])){
				$resultado = mysqli_query($conexao,"SELECT max(id) as next FROM pessoa");
				$next = (int) mysqli_fetch_assoc($resultado)['next'] +1; 
				$sql = "INSERT INTO pessoa(id, nome, endereco, bairro, telefone, email, id_cidade)
						 VALUES('{$next}','{$nome}','{$endereco}','{$bairro}','{$telefone}','{email}','{$id_cidade}')";
				$resultado = mysqli_query($conexao,$sql);
			}else{
				$sql = "UPDATE pessoa SET
							nome 	 	='{$nome}',
							endereco 	='{$endereco}',
 							bairro 	 	='{$bairro}',
 							telefone 	='{$telefone}',
 							email 	 	='{$email}',
 							id_cidade	='{$id_cidade}'
 							WHERE id 	='{$id}'";

 				$resultado = mysqli_query($conexao,$sql);
			}
			echo ($resultado)?'Registro salvo com sucesso':'erro ao salvar o registro';
		}
	}
	?>
</body>
	<div class="container">
		<form enctype="multipart/form-data" method="post" action="pessoa_form.php?action=save">
			
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