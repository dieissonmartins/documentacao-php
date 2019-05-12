<?php

$email = "dieisson.martins.santos@gmail.com";


if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)){ 

	echo "<center><font face='Verdana' size='2' color=red>Email não é Valido</font></center>";
}else{
	echo "<center><font face='Verdana' size='2' color=green>Email é Valido</font></center>";
}

?>
