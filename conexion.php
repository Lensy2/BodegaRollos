<?

include ("adodb5/adodb.inc.php");
$conexion = &ADONewConnection(odbc_mssql);
$datos = "Driver={SQL Server};Server=LENSY\SQLEXPRESS;Database=bodega;";

$conexion->Connect($datos,'sa','0509');  



?>