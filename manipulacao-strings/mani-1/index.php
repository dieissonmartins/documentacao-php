<?php

//string normal 
$nome = "Dieisson";
$sobrenome = "Martins dos Santos";

echo "Meu nome é {$nome} {$sobrenome} </br>";


//string quebrada
$texto = <<<CHAVE
	linha1
		linha2
			linha3
				linha4
CHAVE;

echo $texto;





?>