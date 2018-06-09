<!DOCTYPE html>
<html>
<head>
	<title>LISTADO DE HOTELES</title>
</head>
<?php 
//conexion con la base de datos
include "conexion.php";
	@$ciudad=$_GET['city'];
	$con="SELECT Name FROM city WHERE Id='$ciudad'";
	$res=mysqli_query($conexion,$con);
	$row = mysqli_fetch_assoc($res);
	$n_ciudad=$row["Name"];

	$consulta="SELECT *  FROM hotel WHERE IdCity='$ciudad' and Estado='1'";
	$resutlado_city=mysqli_query($conexion,$consulta);

?>
<body>
	<h1>Los hoteles disponibles en la ciudad<?php echo " ".$n_ciudad." ";?>son</h1><br><br>
	<div>
		<label><h2>Desea agregar un nuevo hotel en la ciudad?</h2></label>
		<input type="button" onclick=location.href="agregar_h.php?id_c=<?php echo $ciudad;?>" value="AGREGAR"  />
	</div>
	<br><br>

	<?php 
	echo"<TABLE border=1 width=90% align=center>
		<TR>
		<TH WIDTH=10%>CODIGO</TH>
		<TH WIDTH=20%>NOMBRE</TH>
		<TH WIDTH=35%>DESCRIPCIÓN</TH>
		<TH WIDTH=35%>TELEFONO</TH>
		<TH WIDTH=35%>DIRECCIÓN</TH>
		<TH WIDTH=25%>IMAGEN</TH>
		<TH WIDTH=35%>INSPECCIONAR</TH>
		</TR>";
		
			while($row = mysqli_fetch_assoc($resutlado_city)){

		echo "<TR>
		<TD WIDTH=10%> $row[Id]</TD>
		<TD WIDTH=20%> $row[Name]</TD>
		<TD WIDTH=35%> $row[Description]</TD>
		<TD WIDTH=35%> $row[Phone]</TD>
		<TD WIDTH=35%> $row[Address]</TD>
		<TD><img align='middle'src='descargarimagen.php?Id=".$row["Id"]."'width='200' height='200'></TD>
		<TD WIDTH=35%>
			<input type=button onclick=location.href='rooms.php?ht=".$n_ciudad."&id_h=".$row["Id"]."' value=IR  />
			<input type=button onclick=location.href='editar_h.php?id_c=".$ciudad."&id_h=".$row["Id"]."' value=Editar  />
			<input type=button onclick=location.href='eliminar_h.php?id_c=".$ciudad."&id_h=".$row["Id"]."' value=Eliminar  />
		</TD>
		
		</TR>";

		}
			//Cerrar la tabla
		echo "</TABLE>";
	?>

<input type="button" onclick=location.href='index.php' value="Home"  />
</body>
</html>