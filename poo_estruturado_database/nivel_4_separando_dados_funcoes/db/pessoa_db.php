<?php

function lista_pessoas(){
	
	$servidor 	='localhost';
	$usuario 	= 'root';
	$senha 		='';
	$banco 		= 'bd_livro';
	$conexao 	= mysqli_connect($servidor,$usuario,$senha,$banco);

	$resultado 	= mysqli_query($conexao,"SELECT * pessoa order by id");
	$lista 		= mysqli_fetch_assoc($resultado);

	return $lista;
}

function exclui_pessoa($id){
	
	$servidor 	='localhost';
	$usuario 	= 'root';
	$senha 		='';
	$banco 		= 'bd_livro';
	$conexao 	= mysqli_connect($servidor,$usuario,$senha,$banco);
	
	$resultado 	= mysqli_query($conexao,"DELETE FROM pessoa WHERE id='{$id}'");

	return $resultado;
}

function get_pessoa($id){

	$servidor 	='localhost';
	$usuario 	= 'root';
	$senha 		='';
	$banco 		= 'bd_livro';
	$conexao 	= mysqli_connect($servidor,$usuario,$senha,$banco);
	
	$resultado 	= mysqli_query($conexao,"SELECT * pessoa WHERE id='{$id}'");
	$pessoa		= mysqli_fetch_assoc($resultado);

	return $pessoa;
}

function get_next_pessoa(){

	$servidor 	='localhost';
	$usuario 	= 'root';
	$senha 		='';
	$banco 		= 'bd_livro';
	$conexao 	= mysqli_connect($servidor,$usuario,$senha,$banco);
	
	$resultado 	= mysqli_query($conexao,"SELECT max(id) as next FROM pessoa");
	$next = (int) mysqli_fetch_assoc($resultado)['next'] +1;

	return $next;
}

function insert_pessoa($pessoa){

	$servidor 	='localhost';
	$usuario 	= 'root';
	$senha 		='';
	$banco 		= 'bd_livro';
	$conexao 	= mysqli_connect($servidor,$usuario,$senha,$banco);
	
	$sql		="INSERT INTO pessoa(id,nome,endereco,bairro,telefone,email,id_cidade)
	VALUES('{$pessoa['id']}','{$pessoa['nome']}','{$pessoa['endereco']}','{$pessoa['bairro']}','{$pessoa['telefone']}','{$pessoa['email']}','{$pessoa['id_cidade']}',)";

	$resultado = mysqli_query($conexao,$sql);

	return $resultado;
}

function update_pessoa($pessoa){

	$servidor 	='localhost';
	$usuario 	= 'root';
	$senha 		='';
	$banco 		= 'bd_livro';
	$conexao 	= mysqli_connect($servidor,$usuario,$senha,$banco);

	$sql 		= "UPDATE pessoa SET
							nome 	 	='{$pessoa['nome']}',
							endereco 	='{$pessoa['endereco']}',
 							bairro 	 	='{$pessoa['bairro']}',
 							telefone 	='{$pessoa['telefone']}',
 							email 	 	='{$pessoa['email']}',
 							id_cidade	='{$pessoa['id_cidade']}'
 							WHERE id 	='{$pessoa['id']}'";

 	$resultado = mysqli_query($conexao,$sql);

 	return $resultado; 
}

?>