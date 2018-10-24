<?      

$pedido= $_POST['pedido'];
      
 
 
include ("adodb5/adodb.inc.php");
$conexion = &ADONewConnection(odbc_mssql);
$datos = "Driver={SQL Server};Server=LENSY\SQLEXPRESS;Database=bodega;";
$conexion->Connect($datos,'sa','0509');  



     
   $resultado = &$conexion->Execute("SELECT DISTINCT B.ROLLO,B.UBICACION,C.PESON,C.ROLLO,C.PEDIDO,M.CODIGO,C.CODIGO
                                     FROM [dbo].[CTROLPISO] C, [dbo].[BodegaRollos] B, [dbo].[MTMERCIA] M
                                     WHERE B.ROLLO = (RTRIM(C.ROLLO)+''+RTRIM(C.PEDIDO)+''+RTRIM(C.PESON)) 
                                     AND C.CODIGO = M.CODIGO AND C.PEDIDO='$pedido'"); 						
				       
                          
                   
                        while (!$resultado->EOF) {
								for ($i=0, $max=$resultado->RowCount(); $i < $max; $i++)
							
								print $resultado->fields[$i].'<BR>';
							   
								$resultado->MoveNext();	
								
						}
                       
?>