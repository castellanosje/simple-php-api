<?php
include 'conexion.php'; 

$read = "SELECT * FROM agenda";
 

if ($result = $con->query($read))
{

 	$resultArray = array();
 	$tempArray = array();
 

	 while($row = $result->fetch_object())
	 {

	 	$tempArray = $row;
	    array_push($resultArray, $tempArray);
	 }
 

 	echo json_encode($resultArray);
}
 

mysqli_close($con);
?>
