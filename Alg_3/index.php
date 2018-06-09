<!DOCTYPE html>
<html>
<head>
	<title>ALGORITMO 3</title>
	<script src="js/calcular.js"></script>
</head>
<body>
	<h1>Ingrese  la cantidad de ciudades que va a tener el array,  se creara de forma Randon.
	</h1>
	<br><br>
	<form >
		
		<label>Cantidad de ciudades en el Array</label>
		<input type="number" name="can" id="can" min="2" max="100">
		<br><br>
		<input type="button" value="CREAR ARRAY Y ANALIZAR" onclick="crear_array()">
	</form>

	
	<div id="resultado"></div>
</body>
</html>