

<?php
$db_host="127.0.0.1";
$db_user="edna";
$db_pasword="12345";
$db_name="maquinas";

$con = mysqli_connect ($db_host, $db_user, $db_pasword, $db_name);

if(!$con){
    die("Error" . mysqli_connect_error());
}


$usuario_nuevo = $_POST["usuario_nuevo"];
$contrasena = $_POST["contrasena"];

$con = mysqli_query($con, "SELECT * from usuarios where usuario_nuevo = '$usuario_nuevo' AND contrasena = '$contrasena'");

$rows = mysqli_num_rows($con);

if($rows = mysqli_fetch_array($con)){
    session_start();

    $_SESSION['usuario_nuevo'] = $usuario_nuevo;//nombre $nombre 
    echo "<script>
    alert('Logeado correctamente');
</script>";

header("Location:index.html");
}

?>


