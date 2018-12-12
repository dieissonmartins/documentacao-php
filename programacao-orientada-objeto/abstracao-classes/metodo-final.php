<?php

require_once('classes/conta.php');
require_once('classes/contaCorrente.php');

class ContaCorrenteEspecial extends ContaCorrente{
	public function retirar($quantia){
		$this->saldo -= $quantia;
	}
}

?>