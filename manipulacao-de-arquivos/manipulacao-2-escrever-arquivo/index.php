<?php 

//escreve no arquivo aberto
$arquivo = fopen("banco.txt", "w");
	
	//escrever no arquivo
	fwrite($arquivo, "dieisson");
	fwrite($arquivo, "Martins");
	fwrite($arquivo, "dos ");
	fwrite($arquivo, "Santos");

fclose($arquivo);


//ler e imprime dados do arquivo aberto para leitura
$arquivo = fopen("banco.txt", "r");
	
	$linha = 1;

	while (!feof($arquivo)) {
		$buffer = fgets($arquivo, 4006);

		if ($linha >= 1) {
			echo "{$buffer} </br>";
		}
		$linha++;
	}

fclose($arquivo); 

?>