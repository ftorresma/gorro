<?php include('conexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head> 

<body">
 
  <form id="form1" name="form1" method="post"> </form>
  
  <table width="608" border="0">
    <tbody>
      <tr>
        <td colspan="8" align="center">listado de productos</td>
      </tr> 

<?php

		$consulta=mysqli_query($db_connection,"SELECT * FROM productos");
		while ($filas=mysqli_fetch_array($consulta)) {
			$id=$filas['id'];
			$imagen=$filas['imagen'];
			$nombre=$filas['nombre'];
			$desc=$filas['descripcion'];
			$precio=$filas['precio'];
			$stock=$filas['stock'];
			$fecha=$filas['fecha'];

			
?>

      
      <tr>
        <td><?php echo $id ?></td>
        <td><img src="<?php echo $imagen; ?>" width="120" height="120"><br></td>
        <td><?php echo $nombre ?></td>
        <td><?php echo $desc ?></td>
        <td><?php echo $precio ?></td>
        <td><?php echo $stock ?></td>
        <td><?php echo $fecha ?></td>
        <td>
        <form action="carrito.php" method="post" name="compra">
			<input name="nombre" type="hidden" value="<?php echo $nombre ?>"/>
			<input name="precio" type="hidden" value="<?php echo $precio ?>"/>
			<input name="cantidad" type="hidden" value="1"/>
			
			<input name="comprar" type="submit" value="comprar"/>
        </form>
        </td>
      </tr>
      </tr>
      <p>
      <?php } 
		?>        
		</tbody>
	  </table> 
    </p>
  <p><a href="carrito.php">Ver carrito</a></p>

</body>
</html> 