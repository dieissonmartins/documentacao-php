<?php

$ps = new PagSeguroFacade('BRL'); //chamada da Facade

$product = new sldClass;
$product->id = 5;
$product->description = 'pendrive';
$product->price = 10;
$ps->addItem($product,3); 

?>