<?php 
session_start();

//require_once("datos/datos.php");
require("classConnectionMySQL.php");

// Creamos una nueva instancia
$NewConn = new ConnectionMySQL();

// Creamos una nueva conexion
$NewConn->CreateConnection();

//$sql = "select curp from fichas where curp ='". $_POST['curp']."'";
//$nac = explode("-",$_POST['dateArrival']);
//$a = $nac[0];
//$m = $nac[1];
//$d = $nac[2];
/*if ($m > 07 and $a==1996){
echo"<script type='text/javascript'>
		alert('No cumples con el requisito de edad');
		window.location='registro.php';
	</script>";
} */ 
					//echo $_POST["dateArrival"];
					$nombre = $_POST['nombre'];
					$descripcion = $_POST['des'];
					$am = $_POST['am'];
					
					/*$sexo = $_POST['Sexo'];
					$uno = $_POST['uno'];
					$dos = $_POST['dos'];
					$drone = $_POST['drone'];*/
					
					echo "El primer dato recibido es: ".$nombre."<br>";
					echo "El segundo dato recibido es: ".$descripcion."<br>";
					/*echo "El tercer dato recibido es: ".$sexo."<br>";
					echo "El cuarto dato recibido es: ".$uno."<br>";
					echo "El quinto dato recibido es: ".$dos."<br>";
					echo "El sexto dato recibido es: ".$drone."<br>";*/
					////////////////////////////////////////////////////
					
		
		//////////////////////////////
// INSERTAR
//////////////////////////////

$query="INSERT INTO peliculas VALUES (NULL,'$nombre','$descripcion')";
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
$query="DELETE FROM peliculas WHERE Nombre='MANUEL'";
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
