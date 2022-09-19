
<?php
$conn = new mysqli("mesaayuda.mysql.database.azure.com","bdmesaayuda","C4r0l1n42020*","mesaayuda");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>


