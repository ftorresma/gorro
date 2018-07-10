<?php
session_start();
	require("conexion2.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];

	$sql2=mysqli_query($mysqli,"SELECT * FROM usuarios2 WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['admin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['ingreso']=$f2['ingreso'];
			$_SESSION['admin']=$f2['admin'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}

	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios2 WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['ingreso']=$f['ingreso'];

			header("Location: pagina_lista.html");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>