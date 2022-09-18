<?php

$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL); mysqli_real_connect($conn, "mesaayuda.mysql.database.azure.com", "bdmesaayuda", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>