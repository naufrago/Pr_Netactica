<!DOCTYPE html>
<html lang="es">
<html>
<head>
	<title>LISTADO DE CUARTOS</title>
</head>
<?php 
//conexion con la base de datos
include "conexion.php";
	@$id_h=$_GET['id_h'];
	@$Hotel=$_GET['ht'];
	$con="SELECT Name FROM hotel WHERE Id='$id_h'";
	$res=mysqli_query($conexion,$con);
	$roww = mysqli_fetch_assoc($res);
	$no_=$roww["Name"];
	

	$consulta="SELECT *  FROM room WHERE IdHotel='$id_h' and Estado='1'";
	$resutlado_room=mysqli_query($conexion,$consulta);

?>
<body>
	<h1>Los Cuartos disponibles en el <?php echo " ".$no_." "?>son</h1><br><br>
	<div>
		<label><h2>Desea agregar un nuevo cuarto al Hotel?</h2></label>
		<input type="button" onclick=location.href="agregar_r.php?id_h=<?php echo $id_h;?>" value="AGREGAR"  />
	</div>
	<br><br>

	<?php 
	echo"<TABLE border=1 width=90% align=center>
		<TR>
		<TH WIDTH=5%>CODIGO</TH>
		<TH WIDTH=15%>NOMBRE</TH>
		<TH WIDTH=10%>Precio en $</TH>
		<TH WIDTH=25%>DESCRIPCIÓN</TH>
		<TH WIDTH=15%>Tipo</TH>
		<TH WIDTH=25%>IMAGEN</TH>
		<TH WIDTH=10%>INSPECCIONAR</TH>
		</TR>";
		
			while($row = mysqli_fetch_assoc($resutlado_room)){

				$idt=$row['idType'];
				$con="SELECT *  FROM type WHERE Id='$idt' and Estado='1'";
				$resu=mysqli_query($conexion,$con);
				$tips=mysqli_fetch_assoc($resu);
				$tipos=$tips['Name']."<br>".$tips['Description'];
				
		echo "<TR>
		<TD WIDTH=5%> $row[Id]</TD>
		<TD WIDTH=15%> $row[Name]</TD>
		<TD WIDTH=10%>$". $row['PriceNight']."</TD>
		<TD WIDTH=25%> $row[Description]</TD>
		<TD WIDTH=15%> ".$tipos."</TD>
		<TD><img align='middle'src='descargarimagen1.php?Id=".$row["Id"]."'width='200' height='200'></TD>
		<TD WIDTH=10%>
			<input type=button onclick=location.href='editar_r.php?id_r=".$row['Id']."&id_h=".$id_h."' value=Editar  />
			<input type=button onclick=location.href='eliminar_r.php?id_h=".$id_h."&n_h=".$Hotel."&id_r=".$row['Id']."' value=Eliminar  />
		</TD>
		
		</TR>";

		}
			//Cerrar la tabla
		echo "</TABLE>";
	?>
</body>
</html>