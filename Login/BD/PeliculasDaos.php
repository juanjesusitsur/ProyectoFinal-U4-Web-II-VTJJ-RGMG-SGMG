<?php
include_once('ConexionBD');
$titulo = $_POST['tit'];
$descripcion = $_POST['Descp'];
$horario = $_POST['Fec'];

echo "Los datos de la pelicula son los siguientes";
echo "$titulo, $descripcion, $horario";

$conexion = connectionMySQL();
$sql = "INSERT INTO  (nombre, correo, password) VALUE('$titulo', '$descipcion', '$horario')";
$result = mysqli_query($conexion, $sql)or trigger_error("Query failed! sql - error: ".mysqli_error($conexion));
?>