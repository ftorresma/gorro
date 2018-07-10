<?php include('conexion2.php');?>
<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
    <title>LIBCOM</title>
  </head>
<body background="img/fondo2.png">
	<header class="header">
		<h1>LIBCOM</h1>
	</header>

	  <!-- Navbar
		================================================== -->
<table width="431" border="0">
  <tbody>
	<tr>
	  <td width="267" bgcolor="#0CE978">ADMINISTRADOR  DEL   SITIO</td>
	  <td width="89" bgcolor="#0CE978"><strong><?php echo $_SESSION['user'];?></strong</td>
	  <td width="61" bgcolor="#0CE978"><a href="desconectar.php"> Cerrar sessión </a></td>
	</tr>
  </tbody>
</table>

	<!-- ======================================================================================================================== -->


<table width="569" border="1">
  <tbody>
    <tr>
      <td colspan="7" align="center" bgcolor="#0CE978">TABLA DE USUARIOS</td>
    </tr>
    <tr>
      <td>id</td>
      <td>Usuario</td>
      <td>Password</td>
      <td>Correo</td>
      <td>Password de administrador</td>
      <td>Editar</td>
      <td>Borrar</td>
    </tr>
    
    <?php

		$consulta=mysqli_query($mysqli,"SELECT * FROM login2");
		while ($filas=mysqli_fetch_array($consulta)) {
			$id=$filas['id'];
			$user=$filas['user'];
			$password=$filas['password'];
			$email=$filas['email'];
			$pasadmin=$filas['pasadmin'];
			$rol=$filas['rol'];
	  ?>
    <tr>
      <td><?php echo $id ?></td>
      <td><?php echo $user ?></td>
      <td><?php echo $password ?></td>
      <td><?php echo $email ?></td>
      <td><?php echo $pasadmin ?></td>
      <td></td>
      <td>&nbsp;</td>
    </tr>
        <?php } 
		?> 
  </tbody>
</table>

<div>
	<form action="agregarproducto.php" method="post" name="agregar">
			<input class="boton" type="submit" value="Agregar Producto">
	</form>
</div>
	<p>
	  <!-- Footer
		  ================================================== -->
</p>
	<hr class="soften"/>
	<footer class="footer">

	<hr class="soften"/>
	<p>&copy; Copyright derechos reservados <br/><br/></p>
	</footer>
<!-- /container -->

		<!-- Le javascript
		================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>