<?php

require_once('classes/Preferencias.php');

//obter uma instancia
$instancia_objeto_1 = Preferencias::getInstance();
echo 'A linguagem é - '.$instancia_objeto_1->getData('language').'</br>';

$instancia_objeto_1->setData('language', 'pt');
echo 'A linguagem é - '.$instancia_objeto_1->getData('language').'</br>'; 


?>