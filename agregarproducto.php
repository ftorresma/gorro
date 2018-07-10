<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body background="fondo_ingresar_producto.jpg">
<form action="recibirproducto.php" method="post" id="agregar" enctype="multipart/form-data">
  <table width="390" height="330" border="1" style="margin: 0 auto;">
    <tbody>
      <tr>
        <td colspan="2" align="center">Ingrese un producto a Stock</td>
      </tr>
      <tr>
        <td width="92">Imagen:     </td>
        <td width="225"><label for="imagen"></label>
        <input type="file" name="imagen" id="imagen"></td>
      </tr>
      <tr>
        <td>Nombre:</td>
        <td><label for="nombre">
        	<input type="text" name="nombre" id="nombre">
        </label></td>
      </tr>
      <tr>
        <td height="85">Descripcion:</td>
        <td><label for="descripcion">
        	<input type="text" name="descripcion" id="descripcion">
        </label></td>
      </tr>
      <tr>
        <td>Precio:</td>
        <td><label for="precio">
        	<input type="text" name="precio" id="precio">
        </label</td>
      </tr>
      <tr>
        <td>Stock:</td>
        <td><label for="stock">
        	<input type="text" name="stock" id="stock">
        </label</td>
      </tr>
      <tr>
        <td>Fecha:</td>
        <td><label for="fecha">
        	<input type="text" name="fecha" id="fecha" value="<?php echo date("y-m-d");?>">
        </label</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" id="submit" value="Enviar"></td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>