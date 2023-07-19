<?php

$dbhost = "127.0.0.1";
$dbuser = "edna";
$dbpass = "12345";
$dbname = "maquinas";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);

$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$usuario_nuevo=$_POST['usuario_nuevo'];
$ciudad=$_POST['ciudad'];
$contrasena=$_POST['contrasena'];


echo "Los datos son los siguientes:<br>";
echo "$nombre, $apellido_paterno, $apellido_materno, $usuario_nuevo,$ciudad,$contrasena";

$sql="INSERT INTO usuarios (id,nombre,apellido_paterno,apellido_materno,usuario_nuevo,ciudad,contrasena) VALUES (0,'$nombre','$apellido_paterno','$apellido_materno','$usuario_nuevo','$ciudad','$contrasena')";
$resul = mysqli_query($conn , $sql) or trigger_error("Query Failed! SQL- Error: " .mysqli_error($conn));
echo "$sql";
header("Location: http://localhost/pagina-para-joyeria-con-parallax-master/index.html");

?>
