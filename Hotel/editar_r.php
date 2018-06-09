<!DOCTYPE html>
<html>
<head>
	<title>EDITAL CUARTO</title>
</head>
<?php 
@$id_r=$_GET['id_r'];
@$id_h=$_GET['id_h'];
@$n_h=$_GET['n_h'];

include "conexion.php";
$con="SELECT * FROM room WHERE Id='$id_r'";
	$res=mysqli_query($conexion,$con);
	$row = mysqli_fetch_assoc($res);
	$n_room=$row["Name"];


?>
<body>
	<center>
		<h1>Por favor edite los campos que requiera y actualice el  Cuarto  <?php echo " ".$n_room; ?>.
		</h1>
		<br><br>
		<img src="Imag/hotel2.jpg" 'width='500' height='400'  />
	<br><br>
	</center>
	<form action="script_actualizar_r.php" method="POST" enctype="multipart/form-data" >
		<label>Nombre del Cuarto</label>
		<input type="text" name="name"  value="<?php echo $row['Name'];?>">
		<br><br>
		<label>Descripción del Cuarto</label>
		<input type="text" name="descripcion"   value="<?php echo $row['Description'];?>">
		<br><br>
		<label>Precio de la noche $</label>
		<input type="text" name="precio"  value="<?php echo $row['PriceNight'];?>">
		<br><br>
		<label>Tipo de Cuarto </label>
		<br>(1 Basico)
		<br>(2 Media)
		<br>(3 Suite)
		<br>(4 Premium)
		<br>(5 Gold)<br>
		<input type="text" name="idt"  value="<?php echo $row['idType'];?>">
		<br><br>
		<label> Imagen  </label>
		<img align="middle"src="descargarimagen1.php?Id=<?php echo $row['Id'];?>"width='200' height='200' name="Nimg">
		<br><br>
		<label>Cargar nueva imagen  </label>
		<input type="file"   name="img"   >
		<br><br>
		<input type="hidden" name="id_rr" value="<?php echo $id_r;?>">
		<input type="hidden" name="id_h" value="<?php echo $id_h;?>">
		<input type="hidden" name="n_h" value="<?php echo $n_h;?>">
		<br><br>
		<input type="submit" value="ACTUALIZAR">
	</form>

</body>
</html>