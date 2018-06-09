<!DOCTYPE html>
<html>
<head>
	<title>ALGORITMO 2</title>
	<script src="js/calcular.js"></script>
</head>
<body>
	<h1>Ingrese  la cantidad de estatuas que va a tener el array,  se creara de forma Randon.
	</h1>
	<br><br>
	<form >
		
		<label>Cantidad de estatuas en el Array</label>
		<input type="number" name="can" id="can" min="2" max="10">
		<br><br>
		<input type="button" value="CREAR ARRAY Y ANALIZAR" onclick="crear_array(1)">
	</form>

	<form>
		<label><br>
			Ingresar en el Array Manual las alturas,estos deben ser enteros y no deben repetir numeros.
		</label>
		<input type="text" name="arr" id="arr">
		<br><br>
		<input type="button" value="ANALIZAR ARRAY" onclick="crear_array(2)">
	</form>
	<div id="resultado"></div>
</body>
</html>