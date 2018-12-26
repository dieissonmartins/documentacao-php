<?php

require __DIR__.'/src/Pessoa.php';

$pessoa = new Pessoa;

echo '</br>'.$pessoa->setNome('Dieisson Martins');
echo '</br>'.$pessoa->setIdade(21);
echo '</br>'.$pessoa->setAltura(1.76);

var_dump($pessoa);


?>