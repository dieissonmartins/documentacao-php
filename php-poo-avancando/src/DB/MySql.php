<?php

namespace DieissonMartins\DB;
//use DieissonMartins\DB\MySql;

class MySql extends Db{
	public function conexao() :string{
		return 'conectado no MySql';
	}
}

?>