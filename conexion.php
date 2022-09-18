<?php

$con = mysqli_init(); 
mysqli_ssl_set($con,NULL,NULL, "/var/www/html/DigiCertGlobalRootCA.crt.pem", 
NULL, NULL); 
mysqli_real_connect($conn, "mesaayuda.mysql.database.azure.com", "bdmesaayuda", 
"C4r0l1n42020*", "mesaayuda", 3306, MYSQLI_CLIENT_SSL);
	
if (mysqli_connect_errno($conn)) {
	die('Failed to connect to MySQL: '.mysqli_connect_error());
?>