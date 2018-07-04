<?php

// ------------- Arreglos INDEXADOS --------

//     i.) se definen con la f(x) array ();
//    ii.) se MODIFICAN los datos assignando valor de variable a la parte del Array a modificar
//   iii.) se localizan/modifican valores por índice




$semana = array('Lunes','Martes','Míercoles','Jueves','Viernes','Sábado','Domingo');

echo 'El 2o día de la Semana es = " '.$semana[1].' " </br>' ;
echo 'El 4o día de la Semana es = " '.$semana[3].' " </br>' ;

$semana[3] = ' MÍERCOLES';

echo 'El 4o día de la Semana Modificado es = " '.$semana[3].' " </br></br>' ;

echo $semana[0].'</br>';
echo $semana[1].'</br>';
echo $semana[2].'</br>';
echo $semana[3].'</br>';
echo $semana[4].'</br>';
echo $semana[5].'</br>';
echo $semana[6].'</br>';


?>


 
