<?php

/*
*Dica: Um grande benefício do PDO é que ele possui uma classe de exceção para lidar com qualquer problema que possa ocorrer em nossas consultas ao *banco de dados. Se uma exceção for lançada dentro do bloco try {}, o script para de executar e flui diretamente para o primeiro bloco catch () {}.
*/


$servidor = 'localhost';
$usuario  = 'root';
$senha	  = '';

try{
	$conexao = new PDO("mysql:host=$servidor;bdname=nome_banco_de_dados", $usuario,$senha);

	//setar erros no PDO 
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Conectado no Banco de Dados...";
}
catch(PDOException $e){

	echo "Não Conectado ao Banco de Dados..." $e->getMessage;
}

?>