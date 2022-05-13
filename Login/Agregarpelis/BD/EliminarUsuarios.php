<?php
session_start();

//require_once("datos/datos.php");
require("classConnectionMySQL.php");

// Creamos una nueva instancia
$NewConn = new ConnectionMySQL();

// Creamos una nueva conexion
$NewConn->CreateConnection();
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];

echo "El primer dato recibido es: ".$nombre."<br>";
echo "El segundo dato recibido es: ".$correo."<br>";
echo "El tercer dato recibido es: ".$pass."<br>";
 
///////////////////////////////
// ELIMINAR
///////////////////////////////
$query="DELETE FROM usuarios WHERE Nombre='$nombre'";
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