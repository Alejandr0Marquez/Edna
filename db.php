<?php
$dbhost = "localhost";
$dbuser = "edna";
$dbpass = "12345";
$dbname = "maquinas";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);

if(!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());	
}

?>
