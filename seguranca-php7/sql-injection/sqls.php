<?php

/* 
|--------------------------------------------------------------------------
| O que é SQL Injection?
|--------------------------------------------------------------------------
|SQL Injection é uma técnica de ataque baseada na manipulação do código SQL,
|que é a linguagem utilizada para troca de informações entre aplicativos e bancos de dados relacionais. 
*/

$servservidor 	= 'localhost';
$servusuario 	= 'root';
$servsenha 		= '';
$servbanco 		= 'bd_prometheus';

$conexao = new mysqli($servservidor, $servusuario, $servsenha,$servbanco);

if($conexao->connect_error) {
    die("Não Conectado: " . $conexao->connect_error);
}else{
	//echo "Conectado no banco de dados";
}

$id = ( isset($_GET['id'] ))?$_GET['id'] :1;

/*forma de barrar o haquer */
if ( !is_numeric($id) or strlen($id) >= 5){
	exit('Pegamos você cracker e raquer');
}


$sql = "SELECT * FROM usuarios WHERE id_usuario = '$id'";

$resultados = mysqli_query($conexao, $sql);

foreach ($resultados as $resultado):
	echo $resultado['nome'];
endforeach;

//http://localhost/sisPrometheus/view_cliente.php?id=13 OR 1=1 --

?>