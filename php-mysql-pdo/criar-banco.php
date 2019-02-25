<?php 

/*
* cria um banco de dados chamado "sistema_prometheus":
*/

$servidor = "localhost";
$usuario  = "root";
$senha	  = "";

try{
	$conn = new PDO("mysql:host=$servidor", $usuario, $senha);

	//setar erro na conexao por PDO
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "CREATE DATABASE sistema_prometheus";

	$conn->exec($sql);
	echo "Banco criado com sucesso";
}
catch(PDOException $e){

	echo $sql."<br>".$e->getMessage();
}

$conn = null;

?>