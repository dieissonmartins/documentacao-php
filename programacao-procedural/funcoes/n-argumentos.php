<?php

function ola(){
	//determina os quais são os argumentos
	$argumentos = func_get_args();
	
	//determina a qtd de argumentos
	$quantidade = func_num_args();

	for($n=0; $n<$quantidade; $n++){
		echo 'Ola '.$argumentos[$n].',';
	}
}
	ola('dieisson','martins','dos','santos');


?>