71.1<?php 

//inicio da funcao 
function calcula_imc($peso, $altura){
	//calcura resultado 
	$resultado = $peso / ($altura * $altura);

	//retorna resultado
	return $resultado; 

}

//declara variavel com peso e altura 
$peso 	= 71.1;
$altura = 3;

//pega retorno da função e atribui para a variavel 
$resultado = calcula_imc($peso, $altura); 

//imprime valor atribuido a variavel
echo $resultado;

//fecha o php
?>