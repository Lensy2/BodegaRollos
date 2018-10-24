<?php


error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL);
error_reporting(-1);

ini_set('error_reporting', E_ALL);

?>

 <?      
session_start();           
		
		 $_SESSION['ubicacion'] = $_POST['ubicacion'];
         $ubicacion=$_SESSION['ubicacion'];
		 
		 $_SESSION['fecha'] = $_POST['fecha'];
         $fecha=$_SESSION['fecha'];
?>
   <html>
<head>


<title>Retirar Rollos</title>
</head>
<body style="background-color:#00000;">
<center>
<BR>
<b>Retirar Rollos</br></b></center>
<center><table>

   <td><form action="verificaretiro2.php" method=POST >	   
       Fecha:                        <input type=text   name=fecha required value= <?echo $fecha?> />*<br><br>
       Ubicación:                    <input type=text   name=ubicacion required value= <?echo $ubicacion?> />*<br><br>
       Rollo:                        <input type=text   name=rollo required />*<br><br>   
	   
        <input type=submit value='Ingresar' />   

   </td></form>
           </table>
        </center>
    </body>
 </html>
 </body>
</html>
