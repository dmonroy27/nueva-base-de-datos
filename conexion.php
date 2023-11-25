<?php
//conexion a la base de datos
$servername = "localhost";
$username = "root";
$pasword = "";
$bdname = "almacen";
$conn = new mysqli($servername, $username, $pasword, $bdname);

//verificar conexion
if ($conn->connect_error){
    die("Conexion Fallida: " .$conn->connect_error);
}
?>