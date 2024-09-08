<?php
echo "Datos:";
echo"<br>";
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];

$hora = $_POST['hora'];
$dia = $_POST['dia'];
$semana = $_POST['semana'];
$mes = $_POST['mes'];
$calendario =$_POST['calendario'];

$hombre= $_POST['hombre'];
$mujer= $_POST['mujer'];

if($hombre==true){
  echo 'Tu sexo es hombre';
}else{
  echo 'Tu sexo es mujer';
}

echo $hora;
echo"<br>";
echo $dia;
echo"<br>";
echo $semana;
echo"<br>";
echo $mes;
echo"<br>";
echo $calendario;
echo"<br>";
echo"<br>";
echo 'Hola '.$nombre.' tu correo es '.$correo.' el mensaje recibido es: '.$mensaje;
echo"<br>";
echo "Hola  $nombre tu correo es  $correo el mensaje recibido es: $mensaje";