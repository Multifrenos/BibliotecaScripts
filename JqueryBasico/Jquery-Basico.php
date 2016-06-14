<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejemplos de uso basico de JQuery y PHP</title>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<!-- Carga bootstrap theme fuente: http://getbootstrap.com/getting-started/ -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>
	<body class="container">
		<div class="row">
			<div class="col-md-12 text-center"><h2>Varios ejemplos uso básico de JQuery y PHP</h2>
			<p> Los ejemplos son recopilación de las siguientes fuentes externas:</p>
			<ul>
				<li>https://github.com/dairdev/dennis-php-ejemplos</li>
			</ul>
			<p>El código fue modificado y mejorado (creo) por Ricardo</p>
			</div>
			<div class="col-md-6">
				<div>
					<h3>Ejemplo 1: Ejecutar funcion de php</h3>
					<p>Ejecutar función de php al hacer click en enviar, y traer el resultado, a un identificador;
					<code>id="sp_dato"</code>
					</p>
					<div class="alert alert-warning"> <strong>Recuerda !</strong>
					<p> Tienes que tener el fichero "datos.php" en el mismo directorio que este fichero.</p>
					
					</div>
					<p>
						<button id="btn_simple_call" type="button">Cargar</button>
						<button id="btn_reset" type="reset">Limpiar</button>
						<input id="txt_dato" type="text" placeholder="Dato a cargar">
					</p>
					<div>
					<?php echo 'Ver datos variable de fichero datos.php :'.$DatosVariable.'<br/>';?>

					Dato de input:
					<span id="sp_dato"></span>
					</div>
				</div>

				<code>
				<?php
				echo "Este es el dato del servidor";
				?>
				</code>
			</div>
			<div class="col-md-6">
				<div>
					<h3>Ejemplo 2:</h3>
					<p>Traer datos en formato json del servidor mediante ajax y mostrarlo en un input y un element html</p>
					<p>
						<button id="btn_json_call" type="button">Cargar</button>
						<button id="btn_reset2" type="reset">Limpiar</button>
						<input id="txt_dato1" type="text" placeholder="Dato 1 a cargar">
						<input id="txt_dato2" type="text" placeholder="Dato 2 a cargar">
					</p>
				</div>

				<pre>
				<?php
				$valores=array("dato1"=>"Primer Dato", "dato2"=>"Segundo Dato");
				echo json_encode($valores);
				?>
				</pre>
			</div>
		</div>
		<script type="text/javascript">
			$("#btn_simple_call").click(function(){
				$.get("datos.php", function(result){
					$("#txt_dato").val(result);
					$("#sp_dato").html(result);
				});
				return false;
			});
			$("#btn_reset").click(function(){
				$("#txt_dato").val("");
				$("#sp_dato").html("");
			});
			//Traer Datos Json
			$("#btn_json_call").click(function(){
				$.get("traer_datos_json.php", function(result){
					var json=$.parseJSON(result);
					$("#txt_dato1").val(json.dato1);
					$("#txt_dato2").val(json.dato2);
				});
				return false;
			});
			$("#btn_reset2").click(function(){
				$("#txt_dato1").val("");
				$("#txt_dato2").val("");
			});
		</script>
	</body>
</html>
