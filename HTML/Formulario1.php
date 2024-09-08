<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario 1</title>
</head>

<body>
  <form action="RecibeFormulario1.php" method="GET">
    <label for="">Nombre:</label>
    <input name="nombre" type="text" id="Nombre">
    <BR></BR>
    <label for="">Email: &nbsp; </label>
    <input name="email" type="text" id="Email">
    <BR></BR>
    <label for="">Mensaje</label>
    <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
    <BR></BR>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>