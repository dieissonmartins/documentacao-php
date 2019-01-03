<?php

try{
	//instancia objeto PDO, conectado no MySQL
	$conn = new PDO('mysql:host=localhost;port=3306;dbname=livro','root','');

	//executa uma serie de instruções SQL
	$conn->exec("insert into famosos (codigo,nome) values(1,'Erico Verissimo')");
	$conn->exec("insert into famosos (codigo,nome) values(1,'Erico Verissimo')");
	$conn->exec("insert into famosos (codigo,nome) values(1,'Erico Verissimo')");
	$conn->exec("insert into famosos (codigo,nome) values(1,'Erico Verissimo')");

	//fecha a conexão
	$conn = NULL;
}
catch(PDOException $e){
	//caso ocorra uma exceção, exibe na tela =
	print "Erro!".$e->getMessage()."</br>";
}

?>