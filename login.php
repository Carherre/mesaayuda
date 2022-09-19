<?php

 include('conexion.php');

$usuario = $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];

$queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE usuario ='$usuario' and pass = '$pass'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
		if($usuario == "usuario")
			{	
				header("Location: pag_user.php");
			}
		else if ($usuari == "carolina")
			{
				header("Location: pag_admin.php");
			}
	}
	else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'index.html' </script>";
	}
 
?>
