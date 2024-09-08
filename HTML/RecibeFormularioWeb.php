<?php
    $nombre = $_POST['name'];
    $numero = $_POST['numero'];
    $rango = $_POST['rango'];
    $color = $_POST['color'];
    $tiempo = $_POST['tiempo'];
    $fecha = $_POST['fecha'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $EC = $_POST['EC'];
    $area = $_POST['area'];
    $tc = isset($_POST['tc']) ? 'Aceptados' : 'No aceptados';

    echo "<table border='1' cellpadding='10'>
            <tr><th>Campo</th><th>Valor</th></tr>
            <tr><td>Nombre</td><td>$nombre</td></tr>
            <tr><td>Número</td><td>$numero</td></tr>
            <tr><td>Rango de calificación</td><td>$rango</td></tr>
            <tr><td>Color favorito</td><td>$color</td></tr>
            <tr><td>Tiempo indicado</td><td>$tiempo</td></tr>
            <tr><td>Fecha</td><td>$fecha</td></tr>
            <tr><td>Email</td><td>$email</td></tr>
            <tr><td>Género</td><td>$genero</td></tr>
            <tr><td>Estado civil</td><td>$EC</td></tr>
            <tr><td>Comentarios</td><td>$area</td></tr>
            <tr><td>Términos y condiciones</td><td>$tc</td></tr>
          </table>";
?>
