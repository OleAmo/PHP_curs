<?php

// ------- SWITCH -------
/*
		i.) switch ($valor)       = seleccionamos un VALOR ....NO UNA CONDICION
	   ii.)     case CONDICION:     = seleccionamos una CONDICION
					- acción
					- break;
	 iii.)      defalut             = en caso que no se cumpla la condicion
	                - acción
	                - break;
*/

$meses = array(
	'Enero','Febrero','Marzo','Abril',
	'Mayo','Junio','Julio','Agosto',
	'Setiembre','Octubre','Noviembre',
	'Diciembre'
);

$numeros = array (1,45,21,14,2,33,55,11,21);
$suma = array_sum($numeros);
$count = count($numeros);
$media = $suma/$count;

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
     	.li {font-family: sans-serif; font-weight: bold ; color:#05123D}
     	.true {font-family: sans-serif; font-weight: bold ; color:#21CB06}
     	.false {font-family: sans-serif; font-weight: bold ; color:#DD1E07}
    </style>
 </head>
 <body>

<div class="col-xs-4">
  	<h2>Qual mes es Enero?</h2>
  		<ul>
			<?php
				foreach ($meses as $mes) {
					switch ($mes) {
						case 'Enero':
							echo '<li class="true"> Este mes es Enero </li>';
							break;
						
						default:
							echo '<li class="false">NO es Enero </br>';
							break;
					}
				}

				echo '</br>';
			?>
			</ul>
 </div>



<div class="col-xs-4">
  	<h2>Que valor es >= que 30</h2>
  		<ul>
			<?php
				foreach ($numeros as $numero) {
					switch ($numero) {
						case $numero >= 30:
							echo '<li class="true">'.$numero.' es mas >= 30 </li>';
							break;
						
						default:
							echo '<li class="false">'.$numero.' es < 30 </li>';
							break;
					}
				}

				echo '</br>';
			?>
			</ul>
 </div>


<div class="col-xs-4">
  	<h2>Que valor es >= que la Media?</h2>
  		<ul>
			<?php
				foreach ($numeros as $numero) {
					switch ($numero) {
						case $numero >= $media:
							echo '<li class="true">'.$numero.' es mas >= que la media de valores ('.round($media,2).') </li>';
							break;
						
						default:
							echo '<li class="false">'.$numero.' es < que la media ('.round($media,2).')</li>';
							break;
					}
				}	
			?>
		</ul>
 </div>




 </body>
</html>
