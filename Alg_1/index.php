<!DOCTYPE html>
<html>
<head>
	<title>ALGORITMO 1</title>
	<script src="js/calcular.js"></script>
</head>
<body>
	<h1>Ingrese el valor mínimo y máximo posible además de la cantidad de datos que va a tener el array, este se creara de forma Randon
	</h1>
	<br><br>
	<form >
		<label>Valor Minimo</label>
		<input type="number" name="min" id="min" min="-100000" max="99999">
		<br><br>
		<label>Valor maximo</label>
		<input type="number" name="max" id="max" min="-99999" max="100000">
		<br><br>
		<label>Cantidad de datos en el Array</label>
		<input type="number" name="can" id="can" min="2" max="100000">
		<br><br>
		<input type="button" value="CREAR ARRAY Y ANALIZAR" onclick="crear_array(1)">
	</form>

	<form>
		<label>
			ingresar in Array Manual, los numeros deben ser enteros seguidos de ,cada uno
		</label>
		<input type="text" name="arr" id="arr">
		<br><br>
		<input type="button" value="ANALIZAR ARRAY" onclick="crear_array(2)">
	</form>
	<div id="resultado"></div>
</body>
</html>