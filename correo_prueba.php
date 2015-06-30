<?php 
require ('PHPMailerAutoload.php');

$asunto="Correo de prueba";
$mensaje='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

correo de prueba

</body>
</html>';

$mail = new PHPMailer();
$mail->SetLanguage( 'es', 'PhpMailer/language/' );
$mail->IsSMTP();  
 
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server          
$mail->Username   = "administrador@podercreativo.cl";  // GMAIL username
$mail->Password   = "86812121baxio";            // GMAIL password
                                


$mail->From     = "administrador@podercreativo.cl"; ///nombre de casilla
$mail->FromName = utf8_decode("Correo de prueba");////nombre de persona o casilla de la cual se envia el correo

$mail->AddAddress("mortegac@gmail.com","Contacto"); /// correos de Destino , nombre del destinatario

//$mail->AddAddress("destino@dominio3.cl"); /// para agregar mas casillas repetir 

$mail->AddReplyTo("mortegac@gmail.com","Contacto"); // correo a quien le pueden responder el correo los destinatarios

$mail->WordWrap = 50;       
$mail->IsHTML(true);                              // send as HTML



$mail->Subject  =  $asunto; /// asunto del correo
$mail->Body     =  $mensaje;

$mail->AltBody  =  "Si no puede visualizar la información a continuación, revise el archivo adjuntado";
if(!$mail->Send())
{
   echo "Mensaje no enviado <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "Mensaje enviado <p>";
 
}


?>