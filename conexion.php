<?php

$con = mysqli_init(); 
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", 
NULL, NULL); 
mysqli_real_connect($conn, "mesaayuda.mysql.database.azure.com", "bdmesaayuda", 
"C4r0l1n42020*", "mesaayuda", 3306, MYSQLI_CLIENT_SSL);
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>