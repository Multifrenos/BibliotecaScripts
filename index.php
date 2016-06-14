<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Biblioteca de utilidades Ricardo Carpintero</title>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<!-- Carga bootstrap theme fuente: http://getbootstrap.com/getting-started/ -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>   
      
 
   <body class="container">
    <h1>El objetivo</h1>
    <p>Conseguir tener una metodología para crear un repositorio en GITHUB que podamos tener pequeños script que podemos necesitar.</p>
    <p>Esto será publico, por lo que no se podrá tener contraseña y usuarios privados.</p>
    <p>La metodología de compartir será a traves de la cuenta de GIT HUB de multifrenos, creando un proyecto ( repositorio ) en GitHub por llamado "Biblioteca de Scripts".El incoveniente que le encuentro es que tenemos que tenemos un GIT unico, pero bueno , creo que podríamos solucionarlos con ramas (branch), o con submodulos.</p>
    <p>El listado de carpetas, tendremos clasificado por los distintos tipo:</p>
    <ul>
    <li> JQuery y Ajax </li>
    <li> Plantillas y anotaciones bootstrap</li>
    </ul>
    <h2> Listado carpetas</h2>
    <p>Cargamos las carpetas con php:</p>
    <?php // Con el siguiente código mostramos los directorios y ficheros , pero filtramos (. y ..)
    $directorios = dir('./'); 
    //~ echo "Handle: " . $directorios->handle . "<br>";
	//~ echo "Path: " . $directorios->path . "<br>"; ?>
	<ul>
	<?php 
	while (false !== ($entry = $directorios->read())) {
		// Filtramos aquellos que son .  .. y index.php que este fichero.
		if (is_dir($entry)) {;
			if ($entry !== '.' & $entry !== '..' && $entry !== 'index.php' ){
			echo '<li><a href="'.$entry.'">'.$entry.'</a></li>';
			}
		}
	}
	$directorios->close();
    ?>
	</ul>
	
	<h2>Directorio: JqueryBásico</h2>
	<p> Es un programa que tiene varios ejemplos JQuery con carga datos de php y JSON.</p>
	<div class="alert alert-warning"> <strong>Recuerda !</strong>
		<p> Para ejecutarlo tiene hacer clic , en "Jquery-Basico.php" , los otros fichero son necesarios para el funcionamiento de los ejemplos.</p>
	</div>

   </body>

 </html>
