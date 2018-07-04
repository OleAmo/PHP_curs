<?php
// ------- ECHO  ------
//       i.)  Echo =  nos sirve para mostrar información en pantalla
//      ii.)  el código PHP queda INVISIBLE al inspeccionar la pantalla del explorador (temas de seguridad y copiright de tu trabajo)
//     iii.)  el código HTML siempre es VISIBLE al inspeccinar
echo "PHP = Echo del PHP";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <style> 
    	h1 {font:oblique bold 100% cursive; color:blue}
     	h3 {font-family: sans-serif; color:green }
    </style>
  </head>

  <body>
  	<h3>HTML = "Hola Mundo en HTML"</h3>
  	<h1> <?php echo "PHP = Hola Munod en PHP";  ?></h1>
  </body>
 </html>
