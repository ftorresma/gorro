<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">	
	<link rel="stylesheet" href="css/estilos.css">
	<title>IZIgorros.com</title>
	<style>
	body {
		background-position: center center;	  
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
	</style>
</head>
<body  background="fondo login.jpg">
	<center><h2 style="color: #0000FF; ">Inicio de sesión</h2></center>

    <form action="validar.php" method="post">
    	<table width="237" border="0" align="center" class="login">
		  <tbody>
			<tr>
			  <td width="131">CORREO:</td>
			  <td width="90"><input style="border-radius:15px;" type="text" name="mail"></td>
			</tr>
			<tr>
			  <td>CONTRASEÑA:</td>
			  <td><input style="border-radius:15px;" type="password" name="pass"></td>
			</tr>
			<tr>
			  <td height="28">&nbsp;</td>
			  <td><input type="submit" value="Aceptar"></td>
			</tr>
		  </tbody>
  		</table>

</form>
<form action="" method="post">
	<table width="371" border="1">
  <tbody>
    <tr>
      <td colspan="2"><legend  style="font-size: 18pt"><b>Registro</b</legend></td>
      </tr>
    <tr>
      <td><label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      </td>
      <td><input type="text" name="realname" placeholder="Ingresa tu nombre" /></td>
    </tr>
    <tr>
      <td>
      <label style="font-size: 14pt;"><b>Ingresa tu email</b></label>
     </td>
      <td> <input type="text" name="nick" required placeholder="Ingresa mail"/>
      </div></td>
    </tr>
    <tr>
      <td>
      <label style="font-size: 14pt;"><b>Ingresa tu Password</b></label>
      </td>
      <td><input type="password" name="pass" placeholder="Ingresa contraseña" />
      </td>
    </tr>
    <tr>
      <td>
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
     </td>
      <td> <input type="password" name="rpass" required placeholder="repite contraseña" />
    </div></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Registrarse"/></td>
      </tr>
  </tbody>
</table>
</form>

<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
  <h1>Gracias por su registro en nuestra pagina Web.</h1>
</body>
</html>