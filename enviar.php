<?php
//llamando a los campos
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];

//datos paar el correo
$destinatario= "itiel1923@gmail.com";
$asunto = "Conacto desde nuestra web";


$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";

//enviar mensaje

mail($destinatario, $asunto, $carta);
header('Location:mensajeenvio.html')


?>