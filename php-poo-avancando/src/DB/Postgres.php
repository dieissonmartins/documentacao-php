<?php

namespace DieissonMartins\DB;
//use DieissonMartins\DB\MySql;

class Postgres extends Db{
	public function conexao() :string{
		return 'conectado no Postgres';
	}
}

?>