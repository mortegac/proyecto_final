<?Php

error_reporting(E_ERROR);

try  
{ 


$texto = "<table width='900px' border='0' align='center' cellpadding='0' cellspacing='0' >
						<tr>
						<td colspan='2'><h1>FORMULARIO DE CONTACTO</h1><hr/></td>
						  </tr>
						
						  <tr>
						    <td width='15%' style='padding-left:10px; font-family:Verdana, Geneva, sans-serif; font-size:12px'>Origen:</td>
						    <td width='85%'>" .$_REQUEST['origen'] ."</td>
						  </tr>
                          <tr>
						    <td width='15%' style='padding-left:10px; font-family:Verdana, Geneva, sans-serif; font-size:12px'>Nombre:</td>
						    <td width='85%'>" .$_REQUEST['frmNombre'] ."</td>
						  </tr>
						  <tr>
						    <td style='padding-left:10px; font-family:Verdana, Geneva, sans-serif; font-size:12px'>Email:</td>
						    <td>" .$_REQUEST['frmEmail'] ."</td>
						  </tr>
						  <tr>
						    <td valign='top' style='padding-left:10px; font-family:Verdana, Geneva, sans-serif; font-size:12px'>Mensaje:</td>
						    <td>" .$_REQUEST['frmMsg'] ."</td>
						  </tr>
						  <tr>
						    <td colspan='2' valign='top' style='text-align:right; height:10px; padding:0px 10px 0px 0px;'><hr/><a href='http://www.apgca.cl/'><img  src='http://www.apgca.cl/bin/contacto/gca.png' alt='GCA APLICACIONES' width='92' height='27' border='0'></a></td>
						  </tr>
						</table>
";

$subject = "CONTACTO: [" .$_REQUEST['origen'] ."]";
$_REQUEST['EmailFrom']  = "mortega@apgca.cl";
/********************************************************************/
$encabezados  = "From: ".$_REQUEST['EmailFrom'] ." \nReply-To: ".$_REQUEST['EmailFrom'] ." " . PHP_EOL; 
$encabezados .= "X-Mailer:PHP/".phpversion()."\n"; 
$encabezados .= "Mime-Version: 1.0\n"; 
$encabezados .= "Content-Type: text/html"; 
/********************************************************************/

mail($_REQUEST['frmEmail'],$subject, $texto, $encabezados);
mail("danielsanchez.urrutia@gmail.com",$subject, $texto, $encabezados);
mail("mortegac@gmail.com",$subject, $texto, $encabezados);	
	
	
	
		$respuesta['Msg'] = "Información enviada, Nos contactaremos a la brevedad";	
		echo json_encode($respuesta);	// Enviar la respuesta al cliente en formato JSON
		
		
		
  
}catch(Exception $e)            /* La operación produjo un error */  
{  
    /* Indica al navegador la condición de error */  
    //header("Status: 400 Bad Request", true, 400);  
    /* Despliega el mensaje de error para el usuario */  
    //echo $e -> getMessage();  
    //exit(1);  
	$respuesta['Msg'] = "Fallo la comunicación, \n Intente más tarde";	
	echo json_encode($respuesta);	// Enviar la respuesta al cliente en formato JSON
}  

?>