<?php
session_start();

//require_once("datos/datos.php");
require("classConnectionMySQL.php");

// Creamos una nueva instancia
$NewConn = new ConnectionMySQL();

// Creamos una nueva conexion
$NewConn->CreateConnection();


$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$horario = $_POST['horario'];
echo "El primer dato recibido es: ".$titulo."<br>";
echo "El segundo dato recibido es: ".$descripcion."<br>";
echo "El tercer dato recibido es: ".$horario."<br>";

///////////////////////////////
// ELIMINAR
///////////////////////////////
 $query="DELETE FROM addpeliculas WHERE titulo ='$titulo'";
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