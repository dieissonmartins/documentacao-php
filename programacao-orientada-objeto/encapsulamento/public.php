<?php

class Pessoa{
	public $nome;
	public $endereco;
	public $nascimento;
}

$pessoa1 = new Pessoa;
$pessoa1->nome = 'Dieisson Martins dos Santos';
$pessoa1->endereco ='Rua Manoel Tome';
$pessoa1->telefone ='+55 33 988643983';
var_dump($pessoa1);

?>