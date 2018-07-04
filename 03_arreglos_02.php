<?php

// ------------- Arreglos ASOCIATIVOS --------

//     i.) se definen con la f(x) array ();
//    ii.) se MODIFICAN los datos assignando valor de variable a la parte del Array a modificar
//   iii.) se localizan/modifican valores por nombre




$usuario1 = array('nombre' => 'Juan','edad' => 25 ,'telefono' => 668415512,'pais'=>'Andorra');
$usuario2 = array('nombre' => 'Laura','edad' => 45 ,'telefono' => 668412711,'pais'=>'Líbia');
$usuario3 = array('nombre' => 'Robert','edad' => 31 ,'telefono' => 655412712,'pais'=>'Inglaterra');


echo 'Los tres Usuarios son  = " '.$usuario1['nombre'].' + '.$usuario2['nombre'].' + '.$usuario3['nombre'].' " </br>' ;
echo 'La meida de edades es = '.round((($usuario1['edad']+$usuario2['edad']+$usuario3['edad'])/3),1).' años </br></br>' ;
echo 'El Antíguo País de <u>'.$usuario3['nombre'].'</u> era <b>'.$usuario3['pais'].'</b>';

$usuario3['pais'] = 'Pakistan';

echo '...i el nuevo País es <b>'.$usuario3['pais'].'</b>';
 

 
 

 


?>


 
