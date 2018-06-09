<?php

@$nombre=$_POST['name'];
@$descripcion=$_POST['descripcion'];
@$precio=$_POST['precio'];
@$tipo=$_POST['tip'];
@$id_h=$_POST['id_h'];
@$nom_h=$_POST['nom_h'];
@$img=$_FILES['img']['tmp_name'];

$itmp = fopen($img, 'r+b');
$imagen = fread($itmp, filesize($img));
fclose($itmp);
//escapando los caracteres
$imagen = mysql_real_escape_string($imagen);

include "conexion.php";
$consulta="INSERT INTO room set Name='$nombre',Description='$descripcion', PriceNight='$precio',  Photo='$imagen',idType='$tipo',IdHotel='$id_h', Estado=1";

$resutlado=mysqli_query($conexion,$consulta);

header('location: rooms.php?ht='.$nom_h.'&id_h='.$id_h.'');

?>