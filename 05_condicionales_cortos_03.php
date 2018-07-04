<?php

// ------- ISSET / CONDICIONAL CORTO-------
/*
		i.) isset($variable) = 
				TRUE = nos dice que tiene algun valor.
				FALSE = nos dice no NO tiene ningún valor.
	   ii.) variable = (condicion) ? (si es verdad se le asigna un valor) : (si no es verdad se le asigna otro valor) ; 


*/

$edad_01;
$edad_02 = 22;

 
$edad_01 = (isset($edad_01)) ? $edad_01 : 'No ha introducido edad </br>';
echo 'Edad :'.$edad_01;

$edad_02 = (isset($edad_02)) ? $edad_02 : 'No ha introducido edad </br>';
echo 'Edad :'.$edad_02;

?>

