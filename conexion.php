<?php
$server="localhost";
$database="maquinas";
$username="edna";
$password="12345";


$con = new mysqli($server,$username,$password,$database);


if($con){
    echo "bien";
}
else{
    echo "mal";
}
?>
