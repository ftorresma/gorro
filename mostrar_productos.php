<!DOCTYPE html>
<html>
<head>
<title>Lista Productos
</title>
	<meta charset="utf-8">
	<link rel="sytlesheet" href="miestilo.css">
	<link rel="stylesheet" href="dise.css">
	<style>
	body {
		background-position: center center;	  
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
	</style>
</head>
<body background="fondo_productos.jpg" >
	<section>
		<table>
			<caption>productos</caption>
			<?php
				$db_host="localhost";
				$db_user="root";
				$db_password="";
				$db_name="tienda";
				$db_table_name="productos";
				
				$db_connection=mysqli_connect($db_host,$db_user,$db_password,$db_name);
				
				if (!$db_connection){
					die("conection failed: " . mysqli_connect_error());
				}
				
				$sql = "SELECT * FROM $db_table_name";
				$result = mysqli_query($db_connection,$sql);
				
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
						print("<big><tr><td>" . $row['nombre'] . "</td></big>");
						print("<td>" . $row['descripcion'] . "</td>");
						print("<td>" . $row['stock'] . "</td>");
						print("<td>" . $row['fecha'] . "</td>");
						print("<td>" . $row['precio'] . "$ </td>");
						print("<figure>");
						print("<img src='" . $row['imagen'] . "' width='100' height='100'>");
						print("</figure>");
						print("<big>--------------------------------------------------------------------------------".$row['nombre']."</big>");
					}
				}
				mysqli_close($db_connection);
			?>
		</table>
		<br>
		<input onClick="window.location.href='pagina_lista.html'" name="submit" type="button" value="regresar"/>
	</section>
</body>
</html>