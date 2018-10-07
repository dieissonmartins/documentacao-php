
<?php

//meus carros
$carros = array("Volvo", "BMW", "Toyota");

echo "Eu quero um {$carros[0]}, {$carros[1]} e {$carros[2]} </br>";
?>

<?php

//idades das pessoas
$idades = array(
	"Dieisson"	=>"20",
	"Samuel"	=>"21",
	"Saulo"		=>"30"
);

foreach ($idades as $nome => $idade) {
	
	echo"</br> NOME: {$nome} | IDADE: {$idade} </br>";
}
?>
