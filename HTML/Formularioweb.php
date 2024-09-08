<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Web y PHP</title>
</head>

<body>
  <form action="RecibeFormularioWeb.php" method="POST">
    <label for="name">
      <span>Nombre:</span>
      <input type="text" id="name" name="nombre">
    </label>
    <br><br>

    <label for="numero">
      <span>Número:</span>
      <input type="number" id="numero" name="numero">
    </label>
    <br><br>

    <label for="rango">
      <span>Rango:</span>
      <input type="range" id="rango" name="rango" min="1" max="10">
    </label>
    <br><br>

    <label for="color">
      <span>Color:</span>
      <input type="color" id="color" name="color">
    </label>
    <br><br>

    <label for="tiempo">
      <span>Tiempo:</span>
      <input type="time" id="tiempo" name="tiempo">
    </label>
    <br><br>

    <label for="fecha">
      <span>Fecha:</span>
      <input type="date" id="fecha" name="fecha">
    </label>
    <br><br>

    <label for="email">
      <span>Email:</span>
      <input type="email" id="email" name="email">
    </label>
    <br><br>

    <label for="genero">
      <span>Género:</span>
      <select name="genero" id="genero">
        <option value="Hombre">Hombre</option>
        <option value="Mujer">Mujer</option>
        <option value="Otro">Otro</option>
      </select>
    </label>
    <br><br>

    <input type="radio" id="soltero" name="EC" value="soltero/a">
    <label for="soltero">Soltero/a</label><br>
    <input type="radio" id="casado" name="EC" value="casado/a">
    <label for="casado">Casado/a</label><br>
    <input type="radio" id="otro" name="EC" value="otro">
    <label for="otro">Otro</label><br>
    <br><br>

    <label for="area">
      <span>Comentarios:</span>
      <textarea id="area" name="area"></textarea>
    </label>
    <br><br>

    <label>
      <input type="checkbox" id="tc" name="tc" value="TerminosCondiciones"> Aceptar términos y condiciones
    </label>
    <br><br>

    <input type="submit" value="Enviar">
  </form>
</body>

</html>