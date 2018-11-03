<?php

class ContaCorrente extends Conta{
	protected $limite;

	public function __construct($agencia,$conta,$saldo,$limite){
		$this->limite = $limite;
	}
	public function retirar($quantia){
		if($this->saldo + $this->limite >= $quantia){
			$this->saldo -= $quantia; //retirada permitida
		}else{
			return false;
		}
		return true;
	} 
}

?>