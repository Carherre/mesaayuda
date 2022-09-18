<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mesa_ayuda";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>