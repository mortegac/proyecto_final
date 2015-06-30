<?Php

error_reporting(E_ERROR);


$_REQUEST['origen'] ="FORMULARIO DE CONTACTO";
$_REQUEST['nombre'] ="manuel";
$_REQUEST['email'] ="mortegac@gmail.com";
$_REQUEST['fono'] ="23232323";
$_REQUEST['mensaje'] ="probandoprobando";



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
						    <td width='85%'>" .$_REQUEST['nombre'] ."</td>
						  </tr>
						  <tr>
						    <td style='padding-left:10px; font-family:Verdana, Geneva, sans-serif; font-size:12px'>Email:</td>
						    <td>" .$_REQUEST['email'] ."</td>
						  </tr>
						  <tr>
						    <td style='padding-left:10px; font-family:Verdana, Geneva, sans-serif; font-size:12px'>Telefono:</td>
						    <td>" .$_REQUEST['fono'] ."</td>
						  </tr>
						  <tr>
						    <td valign='top' style='padding-left:10px; font-family:Verdana, Geneva, sans-serif; font-size:12px'>Mensaje:</td>
						    <td>" .$_REQUEST['mensaje'] ."</td>
						  </tr>
						  <tr>
						    <td colspan='2' valign='top' style='text-align:right; height:10px; padding:0px 10px 0px 0px;'><hr/><a href='http://www.apgca.cl/'><img  src='http://www.apgca.cl/bin/contacto/gca.png' alt='GCA APLICACIONES' width='92' height='27' border='0'></a></td>
						  </tr>
						</table>
";

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();
//$mail->SetLanguage( 'es', 'PhpMailer/language/' );
$mail->CharSet = 'utf-8';
$body             = $texto; // file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = false;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->IsSMTP();   
$mail->Host = 'mail.apgca.cl'; 
$mail->Port = 25; 
$mail->SMTPAuth = true; 
$mail->Username = 'contacto@apgca.cl'; 
$mail->Password = 'laGuagua.,2015'; 
/*-----------------------------------------------------------------------------------------*/
$mail->SetFrom('contacto@apgca.cl', 'Contacto');
$mail->AddReplyTo("mortega@apgca.cl","Contacto");
$mail->Subject    = "FORMULARIO DE CONTACTO";
$mail->MsgHTML($body);
/*-DESTINATARIOS ----------------------------------------------------------------------------------------*/
$address = "mortegac@gmail.com";
$mail->AddAddress($address, "MANUEL ORTEGA");
$mail->AddBCC("danielsanchez.urrutia@gmail.com", "DANI");

/*- ADJUNTAR ARCHIVOS ----------------------------------------------------------------------------------------*/
//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

/*- ENVIO DE EMAIL ----------------------------------------------------------------------------------------*/
if(!$mail->Send()) {
  $respuesta['Msg'] = "Mailer Error: " . $mail->ErrorInfo;
} else {
  $respuesta['Msg'] = "Informaciones enviada, \n Nos contactaremos a la brevedad";
}
	
	
/* RESPUESTA *******************************************************************/	
echo json_encode($respuesta);	// Enviar la respuesta al cliente en formato JSON
		
		
		
  
}catch(Exception $e)            /* La operación produjo un error */  
{  
    /* Indica al navegador la condición de error */  
    //header("Status: 400 Bad Request", true, 400);  
    /* Despliega el mensaje de error para el usuario */  
    //echo $e -> getMessage();  
    //exit(1);  
	$respuesta['Msg'] = "Fallo la comunicacion, \n Intente más tarde";	
	echo json_encode($respuesta);	// Enviar la respuesta al cliente en formato JSON
}  

?>