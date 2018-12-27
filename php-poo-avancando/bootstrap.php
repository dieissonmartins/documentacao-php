<?php
require __DIR__.'/autoload.php';


//echo '</br>'.$pessoa->setNome('Dieisson Martins');
//echo '</br>'.$pessoa->setIdade(21);
//echo '</br>'.$pessoa->setAltura(1.76);
//echo '</br>';
//
//var_dump($pessoa);

var_dump( (new DieissonMartins\DB\Db)->conexao() );
var_dump( (new DieissonMartins\DB\MySql)->conexao() );
var_dump( (new DieissonMartins\DB\Postgres)->conexao() );

?>