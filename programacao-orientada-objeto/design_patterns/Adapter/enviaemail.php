<?php

require_once('PHPMailer.php');
require_once('classes/PHPMailerAdapter.php');

$email = new PHPMailerAdapter;
$email->setUseSmtp();
$email->setSmtpHost('dieisson.martins.santos@gmail.com',465);
$email->setSmtpUser('pablo@dalloglio.net', 'senhadoemail');
$email->setFrom('pablo@dalloglio.net','Pablo Oglio');
$email->addAddress('dieisson.martins.santos@gmail.com','Destinatário');
$email->setSubject('Oi Cara');
$email->setHtmlBody('<b>Isso é um <i>Teste<i></b>');
$mail->send();
?>