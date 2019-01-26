<?php

class Pessoa{

	public static function save($pessoa){
		$conn = new PDO("mysql:dbname=livro;user=root;host=localhost");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if (empty($pessoa['id'])){
			
			$result = $conn->query("SELECT max(id) as next FROM pessoa");
			$row = $result->fetch();
			$pessoa['id'] = (int)$row['next'] +1;

			$sql = "INSERT INTO pessoa(id,nome,endereco,bairro,telefone,email,id_cidade)
						VALUES('{$pessoa['id']}','{$pessoa['nome']}','{$pessoa['endereco']}','{$pessoa['bairro']}','{$pessoa['telefone']}','{$pessoa['email']}','{$pessoa['id_cidade']}')";
		}
		else{
			$sql = "UPDATE pessoa SET
					nome 	 	='{$pessoa['nome']}',
					endereco 	='{$pessoa['endereco']}',
 					bairro 	 	='{$pessoa['bairro']}',
 					telefone 	='{$pessoa['telefone']}',
 					email 	 	='{$pessoa['email']}',
 					id_cidade	='{$pessoa['id_cidade']}'
 					WHERE id 	='{$pessoa['id']}'";
		}
		return $conn->query($sql);
	}

	public static function find($id){
		$conn = new PDO("mysql:dbname=livro;user=root;host=localhost");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$result = $conn->query("SELECT * FROM pessoa WHERE id='{$id}'");
		return $result->fetch();
	}
}

?>