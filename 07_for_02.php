<?php

// ------- FOR -------
/*
		i.) for ($i = 1; $i <= 10; $i++)
			    $i = 1    --> variable donde empieza el bucle
			    $i <= 10  --> fin del bucle
			    $i++)     --> cuando abanza el bucle
	    


*/

$usuarios = array(

	array('nombre' => 'Juan','edad' => 15 ,'telefono' => 668415512,'pais'=>'Sudan'),
 	array('nombre' => 'Laura','edad' => 45 ,'telefono' => 668412711,'pais'=>'Guinea Ecuatorial'),
	array('nombre' => 'Robert','edad' => 31 ,'telefono' => 655412712,'pais'=>'Inglaterra'),
	array('nombre' => 'Maite','edad' => 11 ,'telefono' => 668415512,'pais'=>'Chad'),
 	array('nombre' => 'Luis','edad' => 5 ,'telefono' => 668412711,'pais'=>'Republica Democratica del Congo'),
	array('nombre' => 'Berta','edad' => 33 ,'telefono' => 655412712,'pais'=>'Israel')
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
  	<h2>Paises (ciclo FOR)</h2>
  		<ul> 
			<?php

			 
			foreach ($usuarios as $usuario) {
			
				// -- Separamos cada una de las letras de cada pais con f(X) = STR_SPLIT
				// -- Creamos de un STRING un ARRAY (cada letra es un valor del ARRAY)

				$letras = str_split($usuario['pais']);

				// -- hacemos un ciclo FOR para detectar cada letra del pais
				// -- calculamos el número de letras para saber cuando acaba el ciclo for

				$n = count($letras);
				  
				for ($i = 0; $i <= ($n-1); $i++) {

					echo $letras[$i];
				}
				echo '</br>' ;
			}
			?>
		</ul> 
 </div>

<div class="col-xs-4">
  	<h2>Numero de Vocales por País (ciclo FOR)</h2>
  		<ul> 
			<?php

			 
			foreach ($usuarios as $usuario) {
			
				// -- Separamos cada una de las letras de cada pais con f(X) = STR_SPLIT
				// -- Creamos de un STRING un ARRAY (cada letra es un valor del ARRAY)

				$letras = str_split($usuario['pais']);

				// -- hacemos un ciclo FOR para detectar cada letra del pais
				// -- calculamos el número de letras para saber cuando acaba el ciclo for
				// -- creamos variable $vocal vacia que la rellenaremos de vocales

				$n = count($letras);
				$vocal = '';
				  
				for ($i = 0; $i <= ($n-1); $i++) {
					if ($letras[$i] == 'a' or 
						$letras[$i] == 'e' or 
						$letras[$i] == 'i' or 
						$letras[$i] == 'o' or 
						$letras[$i] == 'u' or
						$letras[$i] == 'A' or 
						$letras[$i] == 'E' or 
						$letras[$i] == 'I' or 
						$letras[$i] == 'O' or 
						$letras[$i] == 'U'

					) {
						$vocal .= $letras[$i];
					} else {
						$vocal = $vocal;
					}	 
				}
				
				// -- f(x) strlen = nos dice el número de caracteres de un string
				// -- escribimos el númor de vocales + el string de vocales

				$numero_vocals = strlen($vocal);
				echo 'Tiene ('.$numero_vocals.') vocales = [ '.$vocal.' ] </br>' ;
			}
			?>
		</ul> 
 </div>



 </body>
</html>

