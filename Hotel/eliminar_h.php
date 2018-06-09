<?php 
include "conexion.php";
@$id_city=$_GET['id_c'];
@$idh=$_GET['id_h'];

$consulta="UPDATE hotel set  Estado=0 WHERE Id='$idh'";

	$resutlado=mysqli_query($conexion,$consulta);

header('location: hoteles.php?city='.$id_city.'');
?>