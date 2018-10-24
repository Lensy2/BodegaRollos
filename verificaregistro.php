  <?php
  date_default_timezone_set('UTC');

error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
       
session_start();           
		
		 $_SESSION['ubicacion']=$_POST['ubicacion'];
         $ubicacion=$_SESSION['ubicacion'];
		 
		 $_SESSION['fecha']=$_POST['fecha'];
         $fecha=$_SESSION['fecha'];	 
		 

		?>
   
 <html>
<head>

<BR>
<title>Ingresar Rollos</title>
</head>
<center>
<BR>
<b>Ingresar Rollos</br></b></center>
<center><table>
<BR>
   <td><form action="verificaregistro2.php" method=POST >	   
       Fecha:                        <input type=text   name=fecha  value= <?echo $fecha?> />*<br><br>
       Ubicación:                    <input type=text   name=ubicacion  value= <?echo $ubicacion?> />*<br><br>
       Rollo:                        <input type=text   name=rollo required />*<br><br>   
	   
        <input type=submit value='Ingresar' />
	   
   </td></form>
           </table>
        </center>
    </body>
 </html>
 

   
   







   
   