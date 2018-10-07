<?php

	$salario		 = 1020;
	$tempo_servico	 = 12;
	$tem_reclamacoes = false;
	$nome			 ="Dieisson Martins";


//exemplo de um IF

	if( $salario > 100 ){

		if( $tempo_servico >= 12){
			
			if( $tem_reclamacoes != true ){

				echo "Parabéns <b>{$nome}</b>, você foi promovido.<br>";

			}else echo"Você tem que melhorar.";
		}else echo"Você tem que melhorar.";
	}else echo"Você tem que melhorar.";



//modo 1 de condicional

$valor_venda = 90;

	if($valor_venda > 100){
		echo "Muito caro";
	}else{
		echo "Pode comprar";
	}

//modo 2 de condicional
$valor_venda = 101;

	$resultado = ($valor_venda > 100) ? 'Muito Caro' : 'Pode comprar';

	echo "</br>{$resultado}"; 






?>