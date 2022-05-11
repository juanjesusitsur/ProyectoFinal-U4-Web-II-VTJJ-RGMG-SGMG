<?php
//Definicion de Constantes
/*
$servidor="localhost";
$usuario="root";
$password="root1234";
$basedatos="formulario";

	$conexion = mysql_connect($servidor,$usuario,$password)or die("Error: ".mysql_error());
	mysql_select_db($basedatos, $conexion)or die("Error: ".mysql_error());
	
config_db.php	
	

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'lupita10');
define('DATABASE', 'carteleracine');*/
function connectionMySQL(){
	$servidor="localhost";
	$usuario="root";
	$password="lupita10";
	$basedatos="";
	
	$conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);
	return $conexion;
}
function delete($tblname,$nombre,$nombre){

	$sql = "delete from ".$tblname." where ".$nombre."=".$nombre."";
	
	return db_query($sql);
}
function select_id($tblname,$field_name,$field_id){
	$sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
	$db=db_query($sql);
	$GLOBALS['row'] = mysqli_fetch_object($db);

	return $sql;

}
function select_id($tblname,$field_name,$field_id){
	$sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
	$db=db_query($sql);
	$GLOBALS['row'] = mysqli_fetch_object($db);

	return $sql;
}
?>