<?php

//chamadas das classes
require_once'class/Fabricante.php';
require_once'class/Produto.php';

//criação dos Objetos
$produto1 = new Produto('Chocolate',12,6);
$fabricante1 = new Fabricante('Chocolate Factory','Casa Martins','7771'); 

//associacao
$produto1->setFabricante( $fabricante1 );

echo 'Descricao '.$produto1->getDescricao()." </br>";
echo 'Fabricante '.$produto1->setFabricante()->getNome()." </br>";
?>