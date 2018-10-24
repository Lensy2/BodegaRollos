<?
date_default_timezone_set('UTC');
session_start();

$ubicacion=$_SESSION['ubicacion'];
$fecha=$_SESSION['fecha'];
$rollo= $_POST['rollo'];

$fecha2=date('Y-m-d');


include ("adodb5/adodb.inc.php");
$conexion = &ADONewConnection(odbc_mssql);
$datos = "Driver={SQL Server};Server=LENSY\SQLEXPRESS;Database=bodega;";
$conexion->Connect($datos,'sa','0509');  

$seleccion = &$conexion->Execute("select rollo from BodegaRollos where ubicacion = '$ubicacion'");

$rollo2 = $seleccion->fields[0];


if($fecha===$fecha2){
	
	if ($rollo!=$rollo2){

        $resultado = &$conexion->Execute("INSERT INTO [dbo].[BodegaRollos] (id,fecha, ubicacion, rollo) VALUES (2,'$fecha','$ubicacion','$rollo')");
        $resultado2 = &$conexion->Execute("INSERT INTO [dbo].[MovBodegaRollos] (FechaHora,Rollo,UltUbicacion,TipoMov) VALUES ('$fecha','$rollo','$ubicacion','i')");
        
        if(!$resultado and !$resultado2) {
        echo "Hubo un error al ingresar los datos, vuelva a intentarlo";
        require 'verificaregistro.php';			  		   
        } else {
        echo "Rollo guardado con éxito, Ingrese otro más";
        require 'verificaregistro.php';
        }
		
	}else{
		echo "El Rollo que esta ingresando ya existe en esta ubicacion...";
	}
		
}else{
	echo "la fecha debe ser igual a la fecha actual";
}
?>