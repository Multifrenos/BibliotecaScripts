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
						<select name="myMarca" id="myMarca" onchange="DespuesAjax()">
							<option value="0">Seleccione una marca</option>
							<option value="1">Renault</option>
							<option value="2">Citroen</option>
						</select>
						<input id="CheckMarca" type="checkbox" name="vehicle" value="Sin Seleccionar" onchange="CambioMarcas()"> Selecciono Marca<br>
						</div>
						<!-- Presentacion de modelo -->
						<div class="nodelo">
						<label class="nodelo">Modelo</label>
									<!-- Cargamos select con marcas -->
						<select disabled name="Minodelo" id="nodelo" onchange="CambioModelos()">
							<option value="0">Seleccione una modelo</option>
						</select>
				
						</div>
						<!-- Presentacion de version -->
						<div class="versiones">
						<label class="versiones">Versiones</label>
									<!-- Cargamos select con marcas -->
						<select disabled name="MiVersiones" id="versiones">
							<option value="0">Seleccione una modelo</option>
						</select>
				
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
			modelo =['Clio','C3'];
			modeloId = [1,2];
			
		</script>
		<script type="text/javascript">
		function DespuesAjax() {
        if (document.getElementById("CheckMarca").value == 'Sin Seleccionar' ){
                if (document.getElementById("myMarca").value != 0){ 
					document.getElementById("CheckMarca").checked = "checked";
					document.getElementById("CheckMarca").value = 'Seleccionado';
					alert(document.getElementById("CheckMarca").value);
					CambioMarcas();
				}
         } else {
                if (document.getElementById("myMarca").value == 0){ 
					document.getElementById("CheckMarca").checked = "";
					document.getElementById("CheckMarca").value = 'Sin Seleccionar';
					alert(document.getElementById("CheckMarca").value);
				}

        }
}

		</script>
		
	</body>
</html>
