<?php
include_once('ConexionBD');
$nombre = $_POST['nombreC'];
$correo = $_POST['cor'];
$pass = $_POST['psd'];

echo "Los datos de la pelicula son los siguientes";
echo "$nombre, $correo, $password";

$conexion = connectionMySQL();
$sql = "INSERT INTO  (nombre, correo, password) VALUE('$nombre', '$correo', '$pass')";
$result = mysqli_query($conexion, $sql)or trigger_error("Query failed! sql - error: ".mysqli_error($conexion));
?>