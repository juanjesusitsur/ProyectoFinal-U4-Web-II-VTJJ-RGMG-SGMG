<?php
include("conexion.php");
$con=conectar();

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$horario = $_POST['horario'];


$sql="INSERT INTO addpeliculas VALUES (NULL,'$titulo','$descripcion', '$horario')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: addpelis.php");
    
}else {
}
?>