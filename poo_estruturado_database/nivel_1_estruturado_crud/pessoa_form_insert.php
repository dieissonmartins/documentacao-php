<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Pessoa</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
	<form enctype="multipart/form-data" method="post" action="pessoa_save_insert.php">
		<label>Código</label>
		<input type="text" name="id" readonly="1" style="width: 30%">

		<label>Nome</label>
		<input type="text" name="nome" style="width: 50%">

		<label>Endereço</label>
		<input type="text" name="endereco" style="width: 50%">


		<label>Bairro</label>
		<input type="text" name="bairro" style="width: 25%">

		<label>Telefone</label>
		<input type="text" name="telefone" style="width: 25%">

		<label>Email</label>
		<input type="text" name="email" style="width: 25%">

		<label>Cidade</label>
		<select name="id_cidade" style="width: 25%">
			<?php
				require_once('lista_combo_cidades.php');
				echo lista_combo_cidades();
			?>
		</select>
		<input type="submit" value="Enviar Dados">		
	</form>

</body>
</html>