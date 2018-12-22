<?php

//array get_object_vars(object $object)

class Funcionario{
	
	public $nome;
	public $salario;
	public $departamento;
}

$dieisson = new Funcionario;
$dieisson->nome = 'Dieisson Martins dos Santos';
$dieisson->salario = '1700';
$dieisson->departamento = 'Engenharia de Software';

print_r(get_object_vars($dieisson));

?>