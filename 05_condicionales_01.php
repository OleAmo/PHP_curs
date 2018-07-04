<?php

// ------------- CONDICIONALES --------

//      i.)  para ORDENAR cada uno de las variables de un array
//     ii.)  usamos el FOREACH (ARRAY, variable_interna)
//    iii.)  tipos:
/*
					>, <, <= ,>= , ==
					!= diferente
					!  negación
					&& AND
					or
					xor (SOLO será TRUE si una de las dos condiciones de se cumple. si se cumplen las dos, será FALSE)


*/


$usuarios = array(

	array('nombre' => 'Juan','edad' => 15 ,'telefono' => 668415512,'pais'=>'Andorra'),
 	array('nombre' => 'Laura','edad' => 45 ,'telefono' => 668412711,'pais'=>'Líbia'),
	array('nombre' => 'Robert','edad' => 31 ,'telefono' => 655412712,'pais'=>'Inglaterra'),
	array('nombre' => 'Maite','edad' => 11 ,'telefono' => 668415512,'pais'=>'Andorra'),
 	array('nombre' => 'Luis','edad' => 5 ,'telefono' => 668412711,'pais'=>'Líbia'),
	array('nombre' => 'Berta','edad' => 33 ,'telefono' => 655412712,'pais'=>'Líbia')
);
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
  	<h2>Lista de Usuarios"</h2>
  		<ul>
			<?php
			foreach ($usuarios as $usuario) {
				echo '<li class="li">'.$usuario['nombre'].' tiene '.$usuario['edad'].' años y es de '.$usuario['pais'].'</li>';
			}
			?>
		</ul>
 </div>


<div class="col-xs-4">
  	<h2>Usuarios Mayores de Edad</h2>
  		<ul>
			<?php
			foreach ($usuarios as $usuario) {
				if ($usuario['edad'] >= 18) {
					echo '<li class="true">'.$usuario['nombre'].' es MAYOR de EDAD ('.$usuario['edad'].' años) </li>';
				} else {
					echo '<li class="false">'.$usuario['nombre'].' es MENOR de EDAD ('.$usuario['edad'].' años) </li>';
				}
				
			}
			?>
		</ul> 
 </div>




<div class="col-xs-4">
  	<h2>Usarios que son de LÍBIA</h2>
  		<ul>
			<?php
			foreach ($usuarios as $usuario) {
				if ($usuario['pais'] == 'Líbia') {
					echo '<li class="true">'.$usuario['nombre'].' es de LÍBIA </li>';
				} else {
					echo '<li class="false">'.$usuario['nombre'].' es de ('.$usuario['pais'].' ) </li>';
				}	
			}
			 
			?>
		</ul>
</div>




 </body>
</html>


 