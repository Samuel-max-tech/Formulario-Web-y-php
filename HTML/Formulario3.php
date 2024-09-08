<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario 3</title>
</head>

<body>
  <form action="#" method="POST">
    <div>
      <input type="checkbox" name="intereses[]" id="futbol">futbol
      <input type="checkbox" name="intereses[]" id="voleybol">voleybol
      <input type="checkbox" name="intereses[]" id="basquetbol">basquetbol
    </div>
    <div>
      <p>Tipo de Usuario</p>
      <input type="radio" name="opcion" checked value="alumno">Alumno
      <input type="radio" name="opcion" value="maestro">Maestro
    </div>
    <div>
      <p>Selecciona una Tecnologia</p>
      <select name="cursos" id="cursos">
        <option value="javaScript">javaScript</option>
        <option value="HTML5">HTML5</option>
        <option value="CSS3">CSS3</option>
        <option value="Web Standards">Web Standards</option>
      </select>
    </div>
    <div>
      <p>Selecciona otra Tecnologia</p>
      <input list="cursos1">
      <datalist id="cursos1">
        <option value="javaScript"></option>
        <option value="HTML5"></option>
        <option value="CSS3"></option>
        <option value="Web Standards"></option>
      </datalist>
    </div>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>