<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];
/*$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$horario=$_POST['horario'];*/

$sql="DELETE FROM addpeliculas  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("location: addpelis.php");
    }
?>
