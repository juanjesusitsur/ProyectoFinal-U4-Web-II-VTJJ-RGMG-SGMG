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
$password = $_POST['pass'];
echo "El primer dato recibido es: ".$nombre."<br>";
echo "El segundo dato recibido es: ".$correo."<br>";
echo "El tercer dato recibido es: ".$password."<br>";
		
		//////////////////////////////
// ACTUALIZAR
//////////////////////////////

$query="UPDATE usuarios SET pass ='$password' WHERE correo='$correo'";
$result=$NewConn->ExecuteQuery($query);
    if($result){
        $RowCount =  $NewConn->GetCountAffectedRows();
        if($RowCount > 0){
            echo "Query ejecutado exitosamente<BR>";
        }
    }else{
        echo "<h3>Error ejecutando la consulta</h3>";
    }
 
 

?>