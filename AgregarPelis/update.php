<?php

include("conexion.php");
$con=conectar();
$id=$_POST['id'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$horario=$_POST['horario'];

$sql="UPDATE addpeliculas SET  titulo='$titulo',descripcion='$descripcion',horario='$horario' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: addpelis.php");
    }
?>