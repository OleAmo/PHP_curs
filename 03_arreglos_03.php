<?php

// ------------- Arreglos MULITDIMENSIONALES --------

//     i.) se definen con la f(x) array (array());
//    ii.) se MODIFICAN los datos assignando valor de variable a la parte del Array a modificar
//   iii.) se localizan/modifican valores por nombre/índice




$usuarios = array(
	array('Juan',25),
 	array('Laura',45),
  	array( 'Robert',31)
);


echo 'Los tres Usuarios son  = " '.$usuarios[0][0].' + '.$usuarios[1][0].' + '.$usuarios[2][0].' " </br>' ;
echo 'La meida de edades es = '.round((($usuarios[0][1]+$usuarios[1][1]+$usuarios[2][1])/3),1).' años </br></br>' ;
 

 
 

 


?>


 
