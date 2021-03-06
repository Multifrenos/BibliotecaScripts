<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ejemplos de uso basico de JQuery y PHP</title>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	</head>
	<body>
		<h2>Ejemplos de uso basico de JQuery y PHP</h2>

		<div>
			<h3>Traer un dato del servidor mediante ajax y mostrarlo en un input y un element html</h3>
			<p>
				<button id="btn_simple_call" type="button">Cargar</button>
				<button id="btn_reset" type="reset">Limpiar</button>
				<input id="txt_dato" type="text" placeholder="Dato a cargar">
				<span id="sp_dato">Dato a Cargar</span>
			</p>
		</div>

		<pre>
&lt;?php
echo "Este es el dato del servidor";
?&gt;
		</pre>

		<div>
			<h3>Traer datos en formato json del servidor mediante ajax y mostrarlo en un input y un element html</h3>
			<p>
				<button id="btn_json_call" type="button">Cargar</button>
				<button id="btn_reset2" type="reset">Limpiar</button>
				<input id="txt_dato1" type="text" placeholder="Dato 1 a cargar">
				<input id="txt_dato2" type="text" placeholder="Dato 2 a cargar">
			</p>
		</div>

		<pre>
&lt;?php
$valores=array("dato1"=>"Primer Dato", "dato2"=>"Segundo Dato");
echo json_encode($valores);
?&gt;
		</pre>
		<script type="text/javascript">
			$("#btn_simple_call").click(function(){
				$.get("traer_dato.php", function(result){
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
