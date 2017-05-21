<?php 
$nombre=$_POST['nombre'];
$hash=password_hash($nombre, PASSWORD_DEFAULT);
setcookie('nombre', $nombre, time()+1000);
header("Location:cookieC.php");
?>