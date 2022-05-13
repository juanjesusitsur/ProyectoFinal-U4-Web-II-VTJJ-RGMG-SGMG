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
		
		//////////////////////////////
// CONSULTAR
//////////////////////////////
 $query="SELECT * FROM addpeliculas WHERE titulo  = '$titulo'";
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