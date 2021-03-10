<?php

$con = new mysqli(
	"localhost",
	"root",
	"root",
	"android"
);
 
// Check connection
if ($con->connect_error)
{
 die("Fallo de conexión".$con->connect_error);
}

?>