<?php

@$nombre=$_POST['ciudad'];


include "conexion.php";
$consulta="INSERT INTO city set Name='$nombre', Estado=1";

$resutlado=mysqli_query($conexion,$consulta);

header('location: index.php');

?>