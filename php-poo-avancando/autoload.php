<?php

require __DIR__.'/src/Autoload.php';

$autoload = new DieissonMartins\Autoload;
$autoload->register();
$autoload->addNamespace('DieissonMartins', 'src');

$pessoa = new DieissonMartins\Pessoa\Pessoa;

?>