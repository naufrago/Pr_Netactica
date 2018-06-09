<?php

@$nombre=$_POST['name'];
@$descripcion=$_POST['descripcion'];
@$precio=$_POST['precio'];
@$id_tipo=$_POST['idt'];
@$img=$_FILES['img']['tmp_name'];


@$id_rr=$_POST['id_rr'];
@$id_h=$_POST['id_h'];
@$n_h=$_POST['n_h'];
include "conexion.php";

if ($img!="") {
	$itmp = fopen($img, 'r+b');
	$imagen = fread($itmp, filesize($img));
	fclose($itmp);
	//escapando los caracteres
	$imagen = mysql_real_escape_string($imagen);

	
	$consulta="UPDATE room set Name='$nombre',Description='$descripcion', PriceNight='$precio',  Photo='$imagen',idtype='$id_tipo', Estado=1 WHERE Id='$id_rr'";

	$resutlado=mysqli_query($conexion,$consulta);
}else{
	$consulta="UPDATE room set Name='$nombre',Description='$descripcion', PriceNight='$precio',  idtype='$id_tipo', Estado=1 WHERE Id='$id_rr'";

	$resutlado=mysqli_query($conexion,$consulta);
}



header('location: rooms.php?ht='.$n_h.'&id_h='.$id_h.'');

?>