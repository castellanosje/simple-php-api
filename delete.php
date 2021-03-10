<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	require_once("conexion.php");
	$id=$_POST['id'];

	$delete="
	DELETE FROM agenda WHERE ID_AGENDA = '$id'";

	$result = $con->query($delete);

	

	if($con->affected_rows > 0){
		if($result == TRUE){
			echo "registro eliminado correctamente";
		}
		
	}else{
		echo "error al intentar eliminar el registros";
	}

	$con->close();

}
//https://www.youtube.com/watch?v=cBfL5-4Ylgs
?>



