<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejemplos de uso basico de JQuery y PHP</title>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<!-- Carga bootstrap theme fuente: http://getbootstrap.com/getting-started/ -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="roe.js"></script>
	</head>
	<body class="container">
		<div class="row">
			<div class="col-md-12 text-center"><h2>Activar y cargar select segun vamos seleccionado</h2>
			<p>Ejemplo creado para ver el funcionamiento correcto de la carga de datos JSON</p>
			</div>
			<div class="col-md-6">
				<h3>Ejemplo 1: Añadir select según vamos seleccionado</h3>
				<div id="SeleccionarVersion">
					<form>
						<!-- Presentacion de marca -->
						<div class="marca">
						<label class="marca">Marca</label>
						<!-- Cargamos select con marcas -->
						<select name="myMarca" id="myMarca" onchange="myFunction(this.value)">
							<option value="0">Seleccione una marca</option>
							<option value="1">Renault</option>
							<option value="2">Citroen</option>
						</select>
						</div>
						<!-- Presentacion de modelo -->
						<div class="nodelo">
						<label class="nodelo">Modelo</label>
									<!-- Cargamos select con marcas -->
						<select disabled name="Minodelo" id="nodelo" >
							<option value="0">Seleccione una modelo</option>
						</select>
				
						</div>
						<!-- Presentacion de version -->
						<div class="version">
						<label class="version">Version</label>
						<input name="data" type="text">
						</div>
									
						<div class="enviar"></div>
							<input type="submit">
					</form>
				</div>	
			</div>

				
			<div class="col-md-6">
				<div>
				
				</div>

			</div>
		</div>
		<script type="text/javascript">
			var modelo;modelo[1]='Clio';modelo[2]='C3'
		</script>
		
		
	</body>
</html>
