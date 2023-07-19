<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fenix_db";

// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}

$records = array();
$usuarios = array();
$ordenar_record = "SELECT * FROM usuarios ORDER BY record DESC";
	if($resultado = mysqli_query($conexion, $ordenar_record)){
		if(mysqli_num_rows($resultado) > 0){

			while($row = mysqli_fetch_array($resultado)){

            $row['usuario'];
            $row['record'];

            array_push($usuarios, $row['usuario']);
            array_push($records, $row['record']);
			}
			mysqli_free_result($resultado);
		} else{
			echo "No matching records are found.";
		}
	} else{
		echo "ERROR: Could not able to execute $resultado. "
									. mysqli_error($conexion);
	}
    mysqli_close($conexion);
?>