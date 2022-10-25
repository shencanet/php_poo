<?php
//servidor dummy smtp 
//puerto 25 https://app.tutellus.com

//atributos obligatorios
$destinatario = 'imagisoft.develop@gmail.com';
$asunto ='prueba mail()';
$mensaje = ' esto es un mensaje automatico';

//llamada a la funcion mail

mail($destinatario, $asunto, $mensaje);

//parametros opcionales headers 

$cabezera .= 'Funcion mail de PHP \n';
$cabezera .= 'Ejemplo de encio \n';
$cabezera .= 'Imaginasoft'.date("Y");

mail($destinatario, $asunto, $mensaje, $cabezera);



?>