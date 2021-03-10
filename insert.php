<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	require_once("conexion.php");
	$fecha=$_POST['FECHA'];
	$asunto=$_POST['ASUNTO'];
	$actividad=$_POST['ACTIVIDAD'];

	$insert="
	INSERT INTO agenda(
		ID_AGENDA, 
		FECHA, 
		ASUNTO, 
		ACTIVIDAD
	) 
	VALUES (
		'0',
		'{$fecha}',
		'{$asunto}',
		'{$actividad}'
	)";

	$result = $con->query($insert);

	if($result === TRUE){
		echo "registro exitoso";
	}else{
		echo "error";
	}

	$con->close();

}
//https://www.youtube.com/watch?v=cBfL5-4Ylgs
?>



