<?php
echo "Datos:";
echo"<br>";
$nombre = $_GET['nombre'];
$correo = $_GET['email'];
$mensaje = $_GET['mensaje'];
echo"<br>";
echo 'Hola '.$nombre.' tu correo es '.$correo.' el mensaje recibido es: '.$mensaje;
echo"<br>";
echo "Hola  $nombre tu correo es  $correo el mensaje recibido es: $mensaje";