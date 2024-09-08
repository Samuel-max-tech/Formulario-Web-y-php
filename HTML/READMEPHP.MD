# Reporte de ejercicios con php
### Samuel de Jesus Martin Muñoz
### ISC 05-09-2024

## HTML `Formularios`
### Etiqueta form
Sirve para poder etiquetar el formulario y generar la estructura de este, este se genera escribiendo la palabra `Form`
```html
  <form action="RecibeFormulario1.php" method="GET">
```
 
#### Atributo `Action`
Este es el que nos dice hacía que parte se enviara nuestra información
```html
  <form action="RecibeFormulario1.php">
```
#### Atributo `Method`
Este atributo va de la mano con el atributo `action` el cual nos dice que va a realizar si un action `post` o `get` 

**Post** Este sirve para hacer que la información viaje, pero sin entrar en la parte de la ir
**Get** Este sirve para enviar información a partir de la ir, suele ser usado en partes donde la información ya está previamente resguardada y no se requiere de un nivel tan alto de seguridad, ya sea para navegar entre páginas o hacer consultas de las cuales no se expone información de la BD

### Etiqueta Label
Este puede estar asociado con un control ya sea mediante la utilización del atributo for, o ubicando el control dentro del elemento label.
```html
    <label for="">Nombre:</label>
```

### Etiqueta Input
se utiliza para crear controles interactivos en formularios web que recopilan datos de los usuarios
Algunos de los tipos de entrada que se pueden crear con la etiqueta `<input>` son: 
1. Texto 
1. Contraseña 
1. Caja de selección 
1. Botón 
1. Pixel de una imagen 
1. Oculto 
1. Botón de envío 
1. Botón de reinicio
1. Tiempo "Diferentes formatos dependiendo de la necesidad"

```html
    <input name="nombre" type="text" id="Nombre">
```
### Etiqueta span
Generalmente envuelven secciones de texto con fines de estilo o para agregar atributos a una sección de texto sin crear una nueva línea de contenido
```html
    <label for="Hora">
      <span>Hora:</span>
      <input type="TIME" id="hora" name="hora">
    </label> 
```
En este ejemplo se usa un label como contenedor y para que nosotros podamos darle atributos más vistosos es necesario generar este formato

## PHP `Formularios`

### Etiqueta de apertura de código
Esta etiqueta es para delimitar que estaremos trabajando con php, la forma de generar es escribiendo la palabra `php` y dando tabulación, dándonos la posibilidad de implementar `html` como en esta situación

```php
<?php
```
### Etiqueta para enviar mensaje
La etiqueta `echo` sirve para mostrar todos sus parámetros por la salida definida.
```php
echo "Datos:";
```
### Generación de variables
Son utilizadas para almacenar valores como los numéricos, caracteres, líneas de caracteres, o memoria para que puedan ser utilizados en cualquier parte de la programación.
Para usarlos escribimos `$` seguido del nombre de la variable y el valor que tendrá que como se comenta puede ser cualquiera que este definido u asignado, pero no el mismo 

```php
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];

$hora = $_POST['hora'];
$día = $_POST['día'];
$semana = $_POST['semana'];
$mes = $_POST['mes'];
$calendario =$_POST['calendario'];

$hombre= $_POST['hombre'];
$mujer= $_POST['mujer'];
```