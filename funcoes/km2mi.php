<?php

$total = 0;

function km2mi($quilometros){
	global $total;

	$total += $quilometros;

	return $quilometros * 0.6;
}

echo"Dieisson precorreu ".km2mi(100)." milhas<br><hr>";
echo"Joao precorreu ".km2mi(150)." milhas<br><hr>";
echo"marcos precorreu ".km2mi(10)." milhas<br><hr>";
echo"fulano precorreu ".km2mi(99)." milhas<br><hr>";


?>