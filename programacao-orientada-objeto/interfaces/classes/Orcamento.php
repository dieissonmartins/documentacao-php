<?php

class Orcamento{
	private $itens;

	public function adiciona(OrcavelInterface $produto, $quantidade){
		$this->itens[] = array($quantidade, $produto);
	}

	public function calcula_total(){
		$total = 0;

		foreach ($this->itens as $item) {
			$total += ($item[0] * $item[1]->getPreco());
		}
		return $total;
	}
}


?>