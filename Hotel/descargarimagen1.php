<?php
	if ($_GET['Id']) {
		$codigo=$_GET['Id'];
		$link = @mysql_connect("localhost", "root", "");
		$conex= @mysql_select_db("hotel", $link);
		$sql="SELECT Photo FROM room WHERE Id='$codigo'";
		$result=mysql_query($sql);
		header("Content-type: image/jpeg");
		
		while ($row=mysql_fetch_array($result)) {
			echo "$row[Photo]";
		}
		@mysql_query($link);
	}
?>