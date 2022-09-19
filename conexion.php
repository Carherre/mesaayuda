<?php
	//Sintaxis de conexión de la base de datos de muestra para PHP y MySQL.
	
	//Conectar a la base de datos
	
	$hostname="mesaayuda.mysql.database.azure.com";
	$username="bdmesaayuda";
	$password="C4r0l1n42020*";
	$dbname="it";
	$usertable="Ingreso";
	
	mysqli_connect($hostname,$username, $password) o morir ("html>script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)/script>/html>");
	mysqli_select_db($dbname);
	
	# Comprobar si existe registro
	
	$query = “SELECCIONAR * DESDE $usertable”;
	
	$result = mysqli_query($query);
	
	si($result){
		while($row = mysqli_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Nombre: ".$name."br/>";
		}
	}
?>

