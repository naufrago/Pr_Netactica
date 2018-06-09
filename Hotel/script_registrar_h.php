<?php

@$nombre=$_POST['name'];
@$descripcion=$_POST['descripcion'];
@$telefono=$_POST['telefono'];
@$direccion=$_POST['direccion'];
@$id_city=$_POST['id_city'];
@$img=$_FILES['img']['tmp_name'];

$itmp = fopen($img, 'r+b');
$imagen = fread($itmp, filesize($img));
fclose($itmp);
//escapando los caracteres
$imagen = mysql_real_escape_string($imagen);

include "conexion.php";
$consulta="INSERT INTO hotel set Name='$nombre',Description='$descripcion', Phone='$telefono', Address='$direccion', Photo='$imagen',IdCity='$id_city', Estado=1";

$resutlado=mysqli_query($conexion,$consulta);

header('location: hoteles.php?status=6');

?>