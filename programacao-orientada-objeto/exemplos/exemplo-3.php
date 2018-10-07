<?php 

class Conta{
	 
	 protected $agencia;
	 protected $conta;
	 protected $saldo;

	 function __construct($agencia, $conta, $saldo){
	 	$this->agencia = $agencia;
	 	$this->conta   = $conta;
	 	$this->saldo   = $saldo;
	 }

	 public function getDetalhes(){
	 	return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}";
	 } 

	public function depositar($valor){
		$this->saldo += $valor;
	}
}

class Poupanca extends Conta{

	public function saque($valor){

		if($this->saldo >= $valor){
			$this->saldo -= $valor;
			echo "Saque de: {$valor} | Saldo atual: {$this->saldo}</br>";
		}else{
			echo "Saque não autorizado | Saldo atual: {$this->saldo}</br>";
		}
	}
}

class Corrente extends Conta{

	protected $limite;

	function __construct($agencia, $conta, $saldo, $limite){
		parent::__construct($agencia, $conta, $saldo);
	 	$this->limite  = $limite;
	 }

	public function saque($valor){

		if( ($this->saldo + $this->limite ) >= $valor){
			$this->saldo -= $valor;
			echo "Saque de: {$valor} | Saldo atual: {$this->saldo}</br>";
		}else{
			echo "Saque não autorizado | Saldo atual: {$this->saldo}</br>";
		}
	}
}

/*Objeto 1 nome Dieisson*/
$dieisson = new Poupanca(123,4567,340);
echo $dieisson->getDetalhes();

echo"</br>";

/*deposito  na conta*/
$dieisson->depositar(1300);
echo $dieisson->getDetalhes();

echo"</br>";

/*Objeto 2 nome Samuel*/
$samuel = new Poupanca(987,6543,640);
echo $samuel->getDetalhes();

echo"</br>";

$samuel->saque(600);

echo"</br></br>";

/*Objeto 1 nome Dieisson*/
$dieissoncorrente = new Corrente(1423,43567,3420,9000);
echo $dieissoncorrente->getDetalhes();





?>