<?php include('conexion.php');?>
<?php 
#$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
#$conexion=mysqli_connect('localhost','root','');
$rutaservidor='img';
$rutatemporal=$_FILES['imagen']['tmp_name'];
$nombreimagen=$_FILES['imagen']['name'];
$rutadestino=$rutaservidor.'/'.$nombreimagen;
move_uploaded_file($rutatemporal,$rutadestino);

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];

$desc=$_POST['descripcion'];
$stock=$_POST['stock'];
$fecha=$_POST['fecha'];

$sql="INSERT INTO productos (imagen,nombre,descripcion,precio,stock,fecha)
	values('".$rutadestino."',
	'".$nombre."',
	'".$desc."',
	'".$precio."',
	'".$stock."',
	'".$fecha."')";
$res=mysqli_query($db_connection,$sql);
if($res){
	echo'INGRESO DE PRODUCTO EXITOSO';
}else{
	echo('NO SE HA PODIDO COMPLETAR EL INGRESO DE SU PRODUCTO');
}
?>
