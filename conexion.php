<?php

$dbhost = "mesaayuda.mysql.database.azure.com";
$dbuser = "bdmesaayuda";
$dbpass = "C4r0l1n42020*";
$dbname = "mesaayuda";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>