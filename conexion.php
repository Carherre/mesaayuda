<?php

$host = 'mesaayuda.mysql.database.azure.com';
$username = 'bdmesaayuda@mesaayuda';
$password = 'C4r0l1n42020*';
$db_name = 'mesaayuda';

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'mesaayuda.mysql.database.azure.com', 'bdmesaayuda@mesaayuda', 'C4r0l1n42020*', 'mesaayuda', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>