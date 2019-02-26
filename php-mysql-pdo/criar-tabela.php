<?php

$servidor = "localhost";
$usuario  = "root";
$senha	  = "";
$banco	  = "";

try{
	$conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

	//confere erros
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//Digite aqui o SQL para criar uma tabela
	$sql = "";

	$conn->exec($sql);
	echo "Sucesso! Tabela criada";
}
catch(PDOException $e){
	echo $sql."<br>".$e->getMessage();
}

$conn = NULL;

?>