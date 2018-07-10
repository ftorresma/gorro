<?php
include ('conexion.php');
$consulta=mysqli_query($db_connection,"SELECT * FROM productos");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/estilos.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>    
	<nav class="cabezera">Inicio  |   Nosotros   |  Contacto     </nav>
	<div>
		<td width="61" bgcolor="#0CE978"><a href="desconectar.php"> Cerrar sessión </a></td>
	</div>
	<article class="contenedor">
		<?php
		while($filas=mysqli_fetch_array($consulta)){
			$id=$filas['id'];
			$imagen=$filas['imagen'];
			$nombre=$filas['nombre'];
			$desc=$filas['descripcion'];
			$precio=$filas['precio'];
			$stock=$filas['stock'];
			$fecha=$filas['fecha'];
		?>	
		

		<div class="caja">   
			<h4><?php echo $nombre ?></h4>
			<img src="<?php echo $imagen ?>" width="150" height="120">
			<p>$<?php echo $precio ?></p>
			<form action="detalle.php" method="post" name="detalle">
				<input name="id" type="hidden" value="<?php echo $id ?>" />
				<input class="boton" type="submit" value="Detalle">
			</form>
		</div>
		<?php
	    }
	    ?>
	</article>
	
</body>
</html>