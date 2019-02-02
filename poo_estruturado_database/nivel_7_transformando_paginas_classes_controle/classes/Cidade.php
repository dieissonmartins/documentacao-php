<?php

class Cidade{

	public static function all(){
		$servidor ='localhost';
		$usuario = 'root';
		$senha ='';
		$banco = 'bd_livro';

		$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

		$sql = mysqli_query($conexao,"SELECT * FROM pessoa");

		return $sql;
	}
}

?>