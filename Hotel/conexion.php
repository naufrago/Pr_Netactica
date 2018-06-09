<?php
$db_host="localhost";
$db_nombre="hotel";
$db_usuario="root";
$db_contra="";


$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


if(mysqli_connect_errno()){
	echo "fallo la conexion";
	exit();
}
?>