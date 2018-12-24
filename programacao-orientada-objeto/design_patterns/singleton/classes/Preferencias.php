<?php

class Preferencias{
	private $data;
	private static $instance;

	private function __construct(){
		$this->data = parse_ini_file('application.ini');
	}

	public static function getInstance(){
		if(empty(self::$instance)){
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function setData($key, $value){
		$this->data[$key] = $value;
	}

	public function getData($key){
		return $this->data[$key];
	}

	public function save(){
		$string = '';

		if($this->date){
			foreach ($this->date as $key => $value) {
				$string .= "{$key} = \"{$value}\" ";
			}
		}
		file_put_contents('application.ini', $string);
	}
}

?>