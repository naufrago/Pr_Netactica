<?php 
include "conexion.php";
@$id_h=$_GET['id_h'];
@$id_r=$_GET['id_r'];
@$n_h=$_GET['n_h'];

$consulta="UPDATE room set  Estado=0 WHERE Id='$id_r'";

	$resutlado=mysqli_query($conexion,$consulta);

header('location: rooms.php?ht='.$n_h.'&id_h='.$id_h.'');
?>