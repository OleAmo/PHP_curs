<?php

// ------------- CICLO con ARREGLOS --------

//      i.)  para ORDENAR cada uno de las variables de un array
//     ii.)  usamos el FOREACH (ARRAY, variable_interna)
//    iii.)  usamos el SORT --> ordena descendentemente
//     vi.)  usamos el RSORT --> ordena ascendentemente

$meses = array(
	'Enero','Febrero','Marzo','Abril',
	'Mayo','Junio','Julio','Agosto',
	'Setiembre','Octubre','Noviembre',
	'Diciembre'
);


$ascendente = $meses;              // Assignamos el Array MESES a dos nuevos ARRAYS.
rsort($ascendente);                // A uno le aplicaremos la f(x) DESCENDENTE y el otro la f(x) ASCENDENTE

$descendente = $meses;
sort($descendente);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- CONEXIONES PARA BOOTSTRAP -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JQERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <style> 
    	h1 {font:oblique bold 100% cursive; color:#0BCC10}
     	h2 {font-family: sans-serif; font-size: 20px; color:#0F7EF5 }
     	.li {font-family: sans-serif; font-weight: bold ; color:#0553A5}
    </style>
  </head>

  <body>
  	<h1>Ejercicio : " ....Uso de CICLOS en los ARREGLOS ...."</h1></br>
  	
  	<div class="col-xs-4">
  	<h2>Meses del Año "ESTANDARD"</h2>
  		<ul>
	  		<?php
	  			foreach ($meses as $mes) {
	  				echo '<li class="li">'.$mes.'</li>'; 
	  			}

	  		?>
  	  	</ul>
  	</div>

  	<div class="col-xs-4">
  	<h2>Meses del Año "DESCENDIENTE"</h2>
  		<ul>
	  		<?php
	  			foreach ($descendente as $mes) {
	  				echo '<li class="li">'.$mes.'</li>';
	  			}

	  		?>
  	  	</ul>
  	</div>
  	<div class="col-xs-4">
  	<h2>Meses del Año "ASCENDIENTE"</h2>
  		<ul>
	  		<?php
	  			foreach ($ascendente as $mes) {
	  				echo '<li class="li">'.$mes.'</li>';		 
	  			}

	  		?>
  	  	</ul>
  	</div>

  </body>
 </html>


 
