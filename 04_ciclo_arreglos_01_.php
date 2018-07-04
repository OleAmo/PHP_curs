<?php

// ------------- CICLO con ARREGLOS --------

//      i.)  para MOSTRAR cada uno de las variables de un array
//     ii.)  usamos el FOREACH (ARRAY, variable_interna)



$meses = array(
	'Enero','Febrero','Marzo','Abril',
	'Mayo','Junio','Julio','Agosto',
	'Setiembre','Octubre','Noviembre',
	'Diciembre'
);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <style> 
    	h1 {font:oblique bold 100% cursive; color:#0BCC10}
     	h2 {font-family: sans-serif; color:#0F7EF5 }
     	.li {font-family: sans-serif; font-weight: bold ; color:#0553A5}
    </style>
  </head>

  <body>
  	<h1>Ejercicio : " ....Uso de CICLOS en los ARREGLOS ...."</h1></br>
  	<h2>Meses del Año</h2>
  		<ul>
	  		<?php

	  			foreach ($meses as $mes) {
	  				echo '<li class="li">'.$mes.'</li>';
	  			 
	  			}

	  		?>
  	  	</ul>
  </body>
 </html>


 
