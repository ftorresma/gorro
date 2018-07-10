<?php include('conexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Carrito</title>
</head>

<body>

	<h1>Este es el lugar donde tus ventas son hechas</h1>
	<h1>Ahora compruebe si su compras estan bien realizadas</h1>
    
<?php 
	if(isset($_POST['id_txt'])){
		$id=$_POST['id_txt'];
		$nombre=$_POST['nombre'];
		$precio=$_POST['precio'];
		$cantidad=$_POST['cantidad'];	$mi_carrito[]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cantidad);
		
}
session_start();

	if(isset($_SESSION['carrito'])){
		$mi_carrito=$_SESSION['carrito'];
		if(isset($_POST['id_txt'])){
			$id=$_POST['id_txt'];
			$nombre=$_POST['nombre'];
			$precio=$_POST['precio'];
			$cantidad=$_POST['cantidad'];
			$pos=-1;
			for($i=0;$i<count($mi_carrito);$i++){
				if($id==$mi_carrito[$i]['id']){
					$pos=$i;
				}
			}
		     if($pos<>-1){
				$cuanto = $mi_carrito[$pos]['cantidad']+$cantidad; $mi_carrito[$pos]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cuanto);
				 
			 }else{
				 $mi_carrito[]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cantidad);
			 }	
		}
}
if(isset($mi_carrito)) $_SESSION['carrito']=$mi_carrito;
	
?>
<table width="265" border="0">
  <tbody>
    <tr>
      <td colspan="4" align="center">LISTADO DE SU COMPRAS</td>
    </tr>
    <tr>
      <td width="43" bgcolor="#98EB0A">PRODUCTO</td>
      <td width="43" bgcolor="#98EB0A">PRECIO</td>
      <td width="43" bgcolor="#98EB0A">CANTIDAD</td>
      <td width="82" bgcolor="#98EB0A">SUBTOTAL</td>
    </tr>
    <?php
	  if(isset($mi_carrito)){
		  $total=0;
		  for($i=0;$i<count($mi_carrito);$i++){
			  
	
	?>
  
    <tr>
      <td><?php echo $mi_carrito[$i]['nombre']; ?></td>
      <td><?php echo $mi_carrito[$i]['precio']; ?></td>
      <td><?php echo $mi_carrito[$i]['cantidad']; ?></td>
      <?php 				  		$subtotal=$mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'] ;
	  $total=$total+$subtotal;	   
	   ?>
      <td><?php echo $subtotal ?></td>
    </tr>
    <?php
	  }
	     
	      }
    
	?> 
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>TOTAL:</td>
      <td><?php if(isset($total)) echo $total ?></td>
    </tr>
  </tbody>
</table>
<p><a href="principal.php">Volver</a></p>

</body>
</html>