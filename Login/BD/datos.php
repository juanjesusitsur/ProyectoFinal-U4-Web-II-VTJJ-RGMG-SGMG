<?php
/*
$servidor="localhost";
$usuario="root";
$password="root1234";
$basedatos="formulario";

	$conexion = mysql_connect($servidor,$usuario,$password)or die("Error: ".mysql_error());
	mysql_select_db($basedatos, $conexion)or die("Error: ".mysql_error());
	
	
*/	
	
 
 class Conexion extends PDO { 
   private $tipo_de_base = 'mysql';
   private $host = 'localhost';
   private $nombre_de_base = 'carteleracine';
   private $usuario = 'root';
   private $contrasena = 'lupita10'; 
   public function __construct() {
      //Sobreescribo el método constructor de la clase PDO.
      try{
         parent::__construct("{$this->tipo_de_base}:dbname={$this->nombre_de_base};host={$this->host};charset=utf8", $this->usuario, $this->contrasena);
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
   } 
 } 
?>

