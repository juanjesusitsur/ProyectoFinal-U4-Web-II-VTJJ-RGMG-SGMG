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
		
		//////////////////////////////
// CONSULTAR
//////////////////////////////
$query="SELECT * FROM usuarios WHERE correo= '$correo' and pass = '$pass'  ";
$result = $NewConn->ExecuteQuery($query);
if($result){
 
    while($row=$NewConn->GetRows($result)){
 
		echo "El usuario es:".$row[1];
 
    }
     
    $NewConn->SetFreeResult($result);
 
}else{
    echo "<h3>Error al generar la consulta</h3>";
} 

?>