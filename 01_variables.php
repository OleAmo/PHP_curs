<?php

// ------------- Variables --------

//     i.) Concatemos con el PUNTO
//    ii.) la f(x) gettype nos dice el tipo de la variable
//   iii.) el salto de línea lo podemos hacer usando el HTML

$nombre = 'Juan';
$apellido = 'Martínez';
$edad = 27;
 

echo $nombre.' '.$apellido.' tiene '.$edad.' años</br>';
 

echo'La variable ['.$nombre.'] es del tipo ( '.gettype($nombre).' )</br>';
echo'La variable ['.$apellido.'] es del tipo ( '.gettype($apellido).' )</br>';
echo'La variable ['.$edad.'] es del tipo ( '.gettype($edad).' )';


?>


 
