<?php

$servidor ='localhost';
$usuario = 'root';
$senha ='';
$banco = 'bd_livro';

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

if (mysqli_error($conexao)) {
	echo "erro na conexao";
}else{
	echo "conectado no banco de dados";
}

?>