<?php

class ClienteService{
	public static function informaInadimplentes($email){
		$inadimplentes = Cliente::getInadimplentes();

		foreach ($inadimplentes as $cliente){
			$email->setHtmlBody();
			$email->addAddress($cliente->email);
			$email->setHtmlBody("Ola <b>$cliente->nome</b>, Cumpra com suas Obrigações")
			$email->send();
		}
	}
}

//substituir 
//ClienteService::informaInadimplentes(new OldEmailService);
//por 
//ClienteService::informaInadimplentes(new PHPMailerAdapter);
?>