<?php
include("db.php");


$codigo = $_POST["codigo"];
$precio = $_POST["txtprecio"];
$producto = $_POST["txtproducto"];
$paquete = $_POST["txtpaquete"];

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: indets.html");
	}


if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{	
	$nombre_imagen=$_FILES['imagen']['name'];
	$temporal=$_FILES['imagen']['tmp_name'];
	$carpeta='../images';
	$imagen=$carpeta.'/'.$nombre_imagen;
	move_uploaded_file($temporal,$carpeta. '/'. $nombre_imagen);

	$sqlgrabar = "INSERT INTO productos(codigo, producto, precio, paquete,imagen) values ('$codigo','$producto','$precio','$paquete','$imagen')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: indets.html");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
	}
	
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	{
			$sqlmodificar = "UPDATE productos SET producto='$producto',precio='$precio',paquete='$paquete' WHERE codigo='$codigo'";

	    if(mysqli_query($conn,$sqlmodificar))
	  {
		header("Location: indets.html");
	}else 
	{
		echo "Error: " .$sql."<br>".mysqli_error($conn);
	}
		
		
}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM productos WHERE codigo='$codigo'";
            echo $sqleliminar;

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: indets.html");
}else 
{
	echo "Error: " .$sql."<br>".mysqli_error($conn);
}
		
		
	}

?>

