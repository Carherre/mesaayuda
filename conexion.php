<?php

$servername = "mesaayuda.mysql.database.azure.com";
$username = "bdmesaayuda";
$password = "C4r0l1n42020*";
$db_name = "mesaayuda";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>