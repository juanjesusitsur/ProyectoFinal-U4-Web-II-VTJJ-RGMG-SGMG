<?php
session_start();

//require_once("datos/datos.php");
require("classConnectionMySQL.php");

// Creamos una nueva instancia
$NewConn = new ConnectionMySQL();

// Creamos una nueva conexion
$NewConn->CreateConnection();


$titulo = $_POST['tit'];
$descripcion = $_POST['Descp'];
$horario = $_POST['Fec'];
echo "El primer dato recibido es: ".$nombre."<br>";
echo "El segundo dato recibido es: ".$descripcion."<br>";
echo "El tercer dato recibido es: ".$horario."<br>";
		
		//////////////////////////////
// INSERTAR
//////////////////////////////

$query="INSERT INTO peliculas VALUES (NULL,'$nombre','$descripcion', '$horario')";
$result=$NewConn->ExecuteQuery($query);
    if($result){
        $RowCount =  $NewConn->GetCountAffectedRows();
        if($RowCount > 0){
            echo "Query ejecutado exitosamente<BR>";
        }
    }else{
        echo "<h3>Error ejecutando la consulta</h3>";
    }
		
		
		
		//////////////////////////////
// CONSULTAR
//////////////////////////////
$query="SELECT * FROM peliculas WHERE nombre ";
$result = $NewConn->ExecuteQuery($query);
if($result){
 
    while($row=$NewConn->GetRows($result)){
 
		echo "El usuario es:".$row[1];
 
    }
     
    $NewConn->SetFreeResult($result);
 
}else{
    echo "<h3>Error al generar la consulta</h3>";
}
 
///////////////////////////////
// ELIMINAR
///////////////////////////////
$query="DELETE FROM peliculas WHERE Nombre='$nombre'";
$result=$NewConn->ExecuteQuery($query);
if($result){
    $RowCount=$NewConn->GetCountAffectedRows();
    if($RowCount>0){
        echo "Eliminado exitosamente";
    }
}
else{
        echo "<h3>Error ejecutando la consulta</h3>";
}   

?>
