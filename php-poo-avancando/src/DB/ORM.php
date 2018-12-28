<?php

namespace DieissonMartins\DB;

use DieissonMartins\MyException;

class ORM{
	
	private $db;

	public function setDb(Db $db){
		$this->db = $db;
	}

	public function select(bool $data){

		if ($data){
			return [];
		}
		throw new MyException("A data deveria ser positiva", 1);	
	}
}

?>