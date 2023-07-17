<?php
$server="127.0.0.1";
$database="maquinas";
$username="root";
$password="";


$con = new mysqli($server,$username,$password,$database);


if($con){
    echo "bien";
}
else{
    echo "mal";
}
?>