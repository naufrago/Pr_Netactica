<!DOCTYPE html>
<html>
<head>
	<title>AGREGAR HOTEL</title>
</head>
<?php 
//conexion con la base de datos
include "conexion.php";
	@$ciudad=$_GET['id_c'];
	$con="SELECT Name FROM city WHERE Id='$ciudad'";
	$res=mysqli_query($conexion,$con);
	$row = mysqli_fetch_assoc($res);
	$n_ciudad=$row["Name"];
?>
<body>
	<center>
		<h1>Por favor complete los siguientes campos para agregar un nuevo hotel en la ciudad <?php echo $n_ciudad; ?>.
		</h1>
		<br><br>
		<img src="Imag/hotel.jpg" 'width='500' height='400'  />
	<br><br>
	</center>
	<form action="script_registrar_h.php" method="POST" enctype="multipart/form-data" >
		<label>Nombre del hotel</label>
		<input type="text" name="name" placeholder="Nombre">
		<br><br>
		<label>Descripción del hotel</label>
		<input type="text" name="descripcion" placeholder="Descripción corta">
		<br><br>
		<label>Telefono del hotel</label>
		<input type="text" name="telefono" placeholder="Telefono">
		<br><br>
		<label>Dirección del hotel</label>
		<input type="text" name="direccion" placeholder="Dirección">
		<br><br>
		<label>Cargar imagen  </label>
		<input type="file"   name="img"   >
		<br><br>
		<input type="hidden" name="id_city" value="<?php echo $ciudad;?>">
		<br><br>
		<input type="submit" value="AGREGAR">
	</form>
	

</body>
</html>