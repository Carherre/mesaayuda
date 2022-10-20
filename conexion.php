<?php

  $servername = "bdmesaayuda.mysql.database.azure.com";

  $database = "mesa_ayuda";

  $username = "bdmesaayuda";

  $password = "C4r0l1n42020*";

   // Create connection

  $conn = mysqli_connect($servername, $username, $password, $database);

   // Check connection

   if (!$conn) {

     die("Connection failed: " . mysqli_connect_error());

  }

    echo "Connected successfully";
    
    $resultado = mysqli_query($conn);

     if($resultado) {

      echo "Registro agregado";

    }

     else{

      echo "Error en Registro";

    }

    mysqli_close($conn);



 ?>