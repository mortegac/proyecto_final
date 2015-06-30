<?Php

require_once 'binn/src/Mandrill.php';
$mandrill = new Mandrill('KEY_API_MANDRIL');
// send transactional email

$_REQUEST['EmailFrom'] = 'info@apgca.cl';
$_REQUEST['NombreFrom'] = 'Informaciones Hotel';



try{ 

$texto = "FORMULARIO DE CONTACTO   \n";
$texto = $texto ."______________________________________________________________________\n\n\n";
$texto = $texto ."Nombre:" .$_REQUEST['nombre'] ."\n";
$texto = $texto ."Email:" .$_REQUEST['email'] ."\n";
$texto = $texto ."Mensaje:" .$_REQUEST['mensaje'] ."\n";



    $message = array(
        'subject' => 'CONTACTO: HOTELCORONA.APGCA.CL',
        'text' => $texto,
        'from_email' => $_REQUEST['EmailFrom'],
        'to' => array(
            array(
                'email' => $_REQUEST['email'],
                'name' => $_REQUEST['nombre']
            ),array(
                'email' => $_REQUEST['EmailFrom'] ,
                'name' => $_REQUEST['NombreFrom']
            ),array(
                'email' => 'danielsanchez.urrutia@gmail.com' ,
                'name' => 'Daniel el Pulento'
            )
        )
    );
    $result = $mandrill->messages->send($message);    
} catch(Mandrill_Error $e) { 
    echo 'Error al enviar el Email'; 
}



?>
