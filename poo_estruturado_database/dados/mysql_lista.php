<?php
//abre conexão com banco de dados Mysql
$conn = mysqli_connect('localhost','root','','livro');

//define a consulta que sera realizada
$query = 'SELECT DISTINCT codigo ,nome FROM famosos';

//envia consulta ao banco de dados 
$result = mysqli_query($conn, $query);

if ($result){
	while ($row = mysqli_fetch_assoc($result)){
		echo $row['codigo'].' - '.$row['nome']."</br>";
	}
}

//fecha a conexão
mysqli_close($conn);

?>