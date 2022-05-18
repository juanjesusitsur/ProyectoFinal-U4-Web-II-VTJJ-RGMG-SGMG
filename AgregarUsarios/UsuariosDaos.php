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
// INSERTAR
//////////////////////////////

$query="INSERT INTO usuarios VALUES (NULL,'$nombre','$correo','$pass')";
$result=$NewConn->ExecuteQuery($query);
Header("Location: ../login/index.html");

?>