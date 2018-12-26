<?php

require __DIR__.'/src/Pessoa/Pessoa.php';

$pessoa = new DieissonMartins\Pessoa;

echo '</br>'.$pessoa->setNome('Dieisson Martins');
echo '</br>'.$pessoa->setIdade(21);
echo '</br>'.$pessoa->setAltura(1.76);
echo '</br>';

var_dump($pessoa);


?>