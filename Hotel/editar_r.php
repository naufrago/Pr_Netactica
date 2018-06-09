<!DOCTYPE html>
<html>
<head>
	<title>EDITAL HOTEL</title>
</head>
<?php 
@$id_c=$_GET['id_c'];
@$id_h=$_GET['id_h'];

include "conexion.php";
$con="SELECT * FROM hotel WHERE Id='$id_h'";
	$res=mysqli_query($conexion,$con);
	$row = mysqli_fetch_assoc($res);
	$n_ciudad=$row["Name"];


?>
<body>
	<center>
		<h1>Por favor edite los campos que requiera y actualice el  hotel en la ciudad <?php echo $n_ciudad; ?>.
		</h1>
		<br><br>
		<img src="Imag/hotel1.jpg" 'width='500' height='400'  />
	<br><br>
	</center>
	<form action="script_actualizar_h.php" method="POST" enctype="multipart/form-data" >
		<label>Nombre del hotel</label>
		<input type="text" name="name"  value="<?php echo $row['Name'];?>">
		<br><br>
		<label>Descripción del hotel</label>
		<input type="text" name="descripcion"   value="<?php echo $row['Description'];?>">
		<br><br>
		<label>Telefono del hotel</label>
		<input type="text" name="telefono"  value="<?php echo $row['Phone'];?>">
		<br><br>
		<label>Dirección del hotel</label>
		<input type="text" name="direccion"  value="<?php echo $row['Address'];?>">
		<br><br>
		<label> Imagen  </label>
		<img align="middle"src="descargarimagen.php?Id=<?php echo $row['Id'];?>"width='200' height='200' name="Nimg">
		<br><br>
		<label>Cargar nueva imagen  </label>
		<input type="file"   name="img"   >
		<br><br>
		<input type="hidden" name="id_city" value="<?php echo $id_c;?>">
		<input type="hidden" name="id_h" value="<?php echo $id_h;?>">
		<br><br>
		<input type="submit" value="ACTUALIZAR">
	</form>

</body>
</html>