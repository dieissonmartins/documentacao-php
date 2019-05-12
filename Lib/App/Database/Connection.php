<?php 

namespace Livro\Database;

use PDO;
use Exception;

final class Connection{
	
	private function __construct(){

	}

	public function open($name){

		//verifica se existe arquivo de configuração para este banco de dados
		if (file_exists("config/{$name}.ini")){
			
			$db = parse_ini_file("config/{$name}.ini");
		}else{
			throw new Exception("Arquivo '$name' não encotrado", 1);
			
		}

		//lê as informações contidas no arquivo
		$user = isset($db['user']) ? $db['user'] : NULL;
		$pass = isset($db['pass']) ? $db['pass'] : NULL;
		$name = isset($db['name']) ? $db['name'] : NULL;
		$host = isset($db['host']) ? $db['host'] : NULL;
		$type = isset($db['type']) ? $db['type'] : NULL;
		$port = isset($db['port']) ? $db['port'] : NULL;

		//descobre qual o tipo (driver) de banco de dados a ser utilizado
		switch ($type) {
			case 'mysql':
				$port = $port ? $port : '3306';
				$conn = new PDO("mysql:host={$host};port={$port};dbname={$name}",$user,$pass)
			break;
		}

		//define para que o PDO lance exceções na ocorrência de erros 
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	}
}

?>