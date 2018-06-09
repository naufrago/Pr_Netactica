<!DOCTYPE html>
<html>
<head>
	<title>AGREGAR CUARTO</title>
</head>
<?php 
//conexion con la base de datos
include "conexion.php";
	@$Hotel=$_GET['id_h'];
	$con="SELECT Name FROM hotel WHERE Id='$Hotel'";
	$res=mysqli_query($conexion,$con);
	$row = mysqli_fetch_assoc($res);
	$n_Hot=$row["Name"];
?>
<body>
	<center>
		<h1>Por favor complete los siguientes campos para agregar un nuevo cuarto en el <?php echo $n_Hot; ?>.
		</h1>
		<br><br>
		<img src="Imag/hotel.jpg" 'width='500' height='400'  />
	<br><br>
	</center>
	<form action="script_registrar_r.php" method="POST" enctype="multipart/form-data" >
		<label>Nombre del Cuarto</label>
		<input type="text" name="name" placeholder="Nombre">
		<br><br>
		<label>Descripción del Cuarto</label>
		<input type="text" name="descripcion" placeholder="Descripción corta">
		<br><br>
		<label>Precio por noche</label>
		<input type="text" name="precio" placeholder="Precio">
		<br><br>
		<label>Tipo de Cuarto </label>
		<br>(1 Basico)
		<br>(2 Media)
		<br>(3 Suite)
		<br>(4 Premium)
		<br>(5 Gold)<br>
		<input type="text" name="tip" placeholder="Tipo de cuarto">
		<br><br>
		<label>Cargar imagen  </label>
		<input type="file"   name="img"   >
		<br><br>
		<input type="hidden" name="id_h" value="<?php echo $Hotel;?>">
		<input type="hidden" name="nom_h" value="<?php echo $n_Hot;?>">
		<br><br>
		<input type="submit" value="AGREGAR">
	</form>
	<center>
		<input type="button" onclick=location.href='index.php' value="Home"  />
	</center>
</body>
</html>