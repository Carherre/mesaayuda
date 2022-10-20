<?php

include('conexion.php');

$usuario 	= $_POST["txtusuario1"];
$pass 	= $_POST["txtpassword1"];
$rol = $_POST["roles"];

$queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE usuario ='$usuario'and pass = '$pass' and rol = '$rol'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 0 )  
{
    $pass_fuerte = password_hash($pass, PASSWORD_DEFAULT);
	$queryregistrar = "INSERT INTO login(usuario,pass,rol) values ('$usuario','$pass_fuerte','$rol')";
	

if(mysqli_query($conn,$queryregistrar))
{
	echo "<script> alert('Usuario registrado: $usuario');window.location= 'index.html' </script>";
}
else 
{
	echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
}

}
else
{
		echo "<script> alert('No puedes registrar este usuario: $usuario');window.location= 'index.html' </script>";
}

?>