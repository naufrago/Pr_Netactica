<?php

@$nombre=$_POST['name'];
@$descripcion=$_POST['descripcion'];
@$telefono=$_POST['telefono'];
@$direccion=$_POST['direccion'];
@$id_city=$_POST['id_city'];
@$img=$_FILES['img']['tmp_name'];
@$Nimg=$_FILES['Nimg']['tmp_name'];

@$idh=$_POST['id_h'];
include "conexion.php";

if ($img!="") {
	$itmp = fopen($img, 'r+b');
	$imagen = fread($itmp, filesize($img));
	fclose($itmp);
	//escapando los caracteres
	$imagen = mysql_real_escape_string($imagen);

	
	$consulta="UPDATE hotel set Name='$nombre',Description='$descripcion', Phone='$telefono', Address='$direccion', Photo='$imagen',IdCity='$id_city', Estado=1 WHERE Id='$idh'";

	$resutlado=mysqli_query($conexion,$consulta);
}else{
	$consulta="UPDATE hotel set Name='$nombre',Description='$descripcion', Phone='$telefono', Address='$direccion', IdCity='$id_city', Estado=1 WHERE Id='$idh'";

	$resutlado=mysqli_query($conexion,$consulta);
}



header('location: hoteles.php?city='.$id_city.'');

?>