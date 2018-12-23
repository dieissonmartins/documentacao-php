<?php

require_once('classes/Orcamento.php');
require_once('classes/Produto.php');

$objeto_orcamento = new Orcamento;

$objeto_orcamento->adiciona(new Produto('Máquina de Café',10,299),1);
$objeto_orcamento->adiciona(new Produto('Barbeador Elétrico',12,170),1);
$objeto_orcamento->adiciona(new Produto('Barra de Chocolate',10,7),3);

echo $objeto_orcamento->calcula_total();

?>