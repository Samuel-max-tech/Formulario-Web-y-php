# HTML
## Generacion de estructura o esqueleto 
### Samuel de Jesus Martin Muñoz
### ISC 05-09-2024
**html:5**
Para la creacion podemos generarlo partiendo de **!** y despues dando tabulador

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
```
## Generacion de comentarios
Para poder generar comentarios es en el **ctrol k c**

## Tipos de encabezados

```html
    <h1>Encabezado 1</h1>
    <h2>Encabezado 2</h2>
    <h3>Encabezado 3</h3>
    <h4>Encabezado 4</h4>
    <h5>Encabezado 5</h5>
    <h6>Encabezado 6</h6>
```

## Etiquetas de texto
Son varias etiquetas que se pueden generar para separar nuestra pagina dependiendo de lo que se requiera 
```html
    <!-- Etiquetas de texto -->
          <p>Esto es un parrafo</p>
          <p>Esto es otro parrafo</p>
          <p>Esto 
             <br>es  
             <br>un
             <br>salto
             <br>de 
             <br>linea</p>
             <p>Esto es un parrafo con texto en <b>negrita</b> y continua</p>
             <p>Esto es un texto con <i>Italica</i>, <u>subrayado</u>, <small>con letras pequenas,</small><sub>Subindice</sub> y <sup>Superindice</sup></p>
             <blockquote>Esta es una cita textual</blockquote>
             <cite>Solo se que no se nada</cite>
             <span>Hola, soy un comodin</span>
             <hr>
```
## Listas
En este apartado veremos varias formas de generar listas partiendo de ciertos parametros y si es que son ordenadas o desordenadas 
```html
    <!-- Listas -->
     <ol>
        <li>Primavera</li>
        <li>Verano</li>
        <li>Otoño</li>
     </ol>
    <!-- Listas con tipo romano -->
    <ol type="I">
        <li>Primavera</li>
        <li>Verano</li>
        <li>Otoño</li>
    </ol>
    <!-- Listas al reves -->
    <ol reversed>
        <li>Primavera</li>
        <li>Verano</li>
        <li>Otoño</li>
    </ol>
    <!-- Listas partiendo de un numero especifico -->
    <ol start="10">
        <li>Primavera</li>
        <li>Verano</li>
        <li>Otoño</li>
    </ol>
    <!-- Listas con un tipo de punto diferente -->
    <ul type="circle">
        <li>Primavera</li>
        <li>Verano</li>
        <li>Otoño</li>
    </ul>
    <!-- Listas con un tipo de punto diferente -->
    <ul type="square">
        <li>Primavera</li>
        <li>Verano</li>
        <li>Otoño</li>
    </ul>
     <!-- Lista desordenada -->
      <ul>
        <li>Primavera</li>
        <li>Verano</li>
        <li>Otoño</li>
      </ul>
```
## Apartado de detalles
Permite generar un apartado en el cual se puede guardar u ocultar cierta cantidad de informacion definida por el usuario
```html
      <!-- Apartado de detalles -->
      <details><summary>Resumen del detalle</summary></details>
```
## Tablas
```html
    <!-- Tablas -->
     <table border="1">
        <tr>
            <td>Ciudad</td>
            <td>Pais</td>
            <td>Continente</td>
        </tr>
        <tr>
            <td>Lagos</td>
            <td>Mexico</td>
            <td>America</td>
        </tr>
        <tr>
            <td>Buenos Aires</td>
            <td>Argentina</td>
            <td>America</td>
        </tr>
     </table> 
```
## Etiquetas comodin
Etiquetas que funcionan para que el motor de busqueda las pocisione de mejor manera, estas son nombradas o manejadas confirme a sus id, estos para poder generar sus funciones, sono muy usadas
```html
    <br>
     <div>
        <img width="10%" height="10%" src="img/images (6).png" alt="Imagen de html">
        <p>Este es una imagen de html</p>
     </div>
     <br>
```

## Etiquetas semanticas
Etiquetas que funcionan para que el motor de busqueda las pocisione de mejor manera, estas son nombradas tal cual con respecto a su funcion
```html
    <figure>
        <img width="10%" height="10%" src="img/images (6).png" alt="Imagen de html">
        <figcaption>Este es un logo de html</figcaption>
    </figure>
```

## Enlaces
Etiqueta cuya funcion es generar un enlace a algun elemento de la pagina u otra pagina
```html
    <!-- Enlaces -->
     <a href="Ejercicio3.html">Ejercicio 3 😊   😩</a>
```
