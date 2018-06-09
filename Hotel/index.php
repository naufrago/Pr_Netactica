<!DOCTYPE html>
<html>
<head>
	<title>HOME HOTEL</title>
</head>
<?php 
//conexion con la base de datos
include "conexion.php";

	$consulta="SELECT *  FROM city WHERE Estado='1'";
	$resutlado_city=mysqli_query($conexion,$consulta);

?>
<body>
<center>
	<h1>
		<label>
		Bienvenido al panel de administración de hoteles<br>
	 	selecciona la ciudad deseada o agregala para Habilitarla en la lista desplegable.
	 	</label>
	</h1>
	<img src="Imag/cadena.jpg"  />
	<br><br>
	<h2>
		<label>
			Seleccione una ciudad y continuar
		</label>
	</h2>
	<form action="hoteles.php" method="GET">
		<select name="city">
			<?php
	            while($resultados_citys=mysqli_fetch_assoc($resutlado_city)){
	        ?>
			<option value="<?php echo $resultados_citys['Id']; ?>"><?php echo $resultados_citys['Name']; ?>
				
			</option>
			<?php
	            }
	        ?>
		</select>
		<br>
		
		<input type="submit" value="Continuar"><br><br>
	</form>

	<form action="agregar_c.php" method="POST">
		<label><b>Ingrese la nueva ciudad</b></label>
		<input type="text" name="ciudad">
		<input type="submit" value="AGREGAR CIUDAD">
	</form>
	
</center>


</body>
</html>