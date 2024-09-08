<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario 1</title>
</head>

<body>
  <form action="RecibeFormulario2.php" method="POST">
    <label for="">Nombre:</label>
    <input name="nombre" type="text" id="Nombre" placeholder="Escribe tu nombre">
    <BR></BR>
    <label for="">Email: &nbsp; </label>
    <input name="email" type="email " id="Email" placeholder="Ingresa tu email">
    <BR></BR>
    <label for="">Mensaje</label>
    <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje:"></textarea>
    <BR></BR>
    <label for="Hora">
      <span>Hora:</span>
      <input type="TIME" id="hora" name="hora">
    </label> 

    <label for="dia">
      <span>Día:</span>
      <input type="DATE" id="dia" name="dia">
    </label> 

    <label for="semana">
      <span>Semana:</span>
      <input type="WEEK" id="semana" name="semana">
    </label>  

    <label for="Mes">
      <span>Mes:</span>
      <input type="MONTH" id="mes" name="mes">
    </label>  

    <label for="Calendario">
      <span>Calendario:</span>
      <input type="DATETIME-LOCAL" id="calendario" name="calendario">
    </label> 

    <p>Intereses</p>
    <label for="futbol">
      <input type="checkbox" value="futbol" id="futbol">Futbol
    </label>

    <label for="voleybol">
      <input type="checkbox" value="voleybol" id="voleybol">Voleybol
    </label>

    <p>Sexo</p>
    <label for="mujer">
      <input type="radio" value="mujer" id="mujer">Mujer
    </label>

    <label for="hombre">
      <input type="radio" value="hombre" id="hombre">Hombre
    </label>

    
    <input type="submit" value="Enviar">
  </form>
</body>

</html>