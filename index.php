Diseño de Páginas Web Profesionales y Posicionamiento de Sitios Web akus.net
BUSCAR...
C A R G A N D O...

 
 CURSO DISEÑO WEB:
Inicio  Curso Diseño Web  Aprender PHP y MySQL  Formas de que PHP escriba dentro de HTML
Formas de que PHP escriba dentro de HTML
Notemos que es posible la intercalación de órdenes en lenguaje PHP, alternándolas dentro de una página escrita en lenguaje HTML, tantas veces como sea necesario pueden abrirse y cerrarse los tags de PHP tantas veces como queramos..

 Profesor Hugo Delgado  08/06/2021 Aprender PHP y MySQL 5 Comentarios  54 Votos 51,649 Visitado
Formas de que PHP escriba dentro de HTML | Aprender PHP y MySQL | Notemos que es posible la intercalación  de órdenes en lenguaje PHP, alternándolas dentro de una página escrita en  lenguaje HTML, tantas veces como sea necesario pueden abrirse y cerrarse los  tags de PHP tantas veces como queramos.
Notemos que es posible la intercalación de órdenes en lenguaje PHP, alternándolas dentro de una página escrita en lenguaje HTML, tantas veces como sea necesario (pueden abrirse y cerrarse los tags de PHP tantas veces como queramos.

POR EJEMPLO:
<html>
<head>
<title>Hola</title>
</head>
<body>
<h1>Esto fue escrito estáticamente, en HTML</h1>
<?php
print (“<h2>Hola mundo! Esto lo escribió el intérprete de PHP</h2>”);
?>
<p>Esto ya estaba escrito en código HTML.</p>
<?php
print (“<p>Esto también lo escribió el software intérprete de PHP.</p>”);
?>
<p><a href=”index.php”><?php print (“Volver al Home del sitio, escrito por PHP”); ?></a></p>
</body>
</html>

Apertura y cierre de las etiquetas PHP
Notemos que el tag de PHP:

Puede abrirse y cerrarse en la misma línea en que abrió, o puede cerrarse en otra línea diferente. Es indistinto.
Puede intercalarse dentro de etiquetas HTML pre-existen.
Puede generar nuevas etiquetas HTML mediante un echo o print
Y puede abrirse y cerrarse muchas veces dentro de una misma página.
Los distintos tipos de tags de apertura y cierre de un bloque  escrito en el lenguaje PHP que podemos llegar a encontrar, son los siguientes:

1. Apertura y cierre estándar:
<?php xxxx ?>

O también

<?php
xxxx
?>

Esta es la única sintaxis universal: funciona siempre. Es la única forma recomendada y la que vamos a usar:

2. Apertura y cierre corto:
<? xxxx ?>

O también

<?
xxxx
?>

Esta sintaxis se conoce como short tags (etiquetas cortas). Fue muy usada en los primeros años de PHP, pero no es estándar. No todas las configuraciones del intérprete de PHP habilitan su uso, por lo que un código que utilice esta sintaxis puede dejar de funcionar al ser ubicado en un servidor con otra configuración más estricta. Por ese motivo, no la recomendamos.

3. Apertura y cierre mediante etiqueta script:
<script language=”php”>xxxx</script>

O también

<script language=”php”>
xxxx
</script>

Esta sintaxis, si bien todavía se soporta, es innecesariamente larga y es rarísimo encontrar algún código que la emplee. Por lo tanto, al no tener ninguna otra ventana añadida, no se recomienda su uso.

4. Tags estilo ASP:
<% xxx %>

O también

<%
xxxx
%>

Sintaxis al estilo del lenguaje de programación ASP de Microsoft: no es estándar, la posibilidad de usarla depende de la configuración del intérprete; por lo tanto, tampoco se recomienda su utilización.

En los ejemplos anteriores, hemos utilizado la función print, que “escribe” en el código fuente de la página que está por enviarse instantes después desde el servidor hacia al navegador del usuario, y que, como vemos, puede escribir no solamente texto, sino también etiquetas HTML como el “<p>” o “<h1>” del ejemplo, etiquetas que luego son interpretadas por el navegador como cualquier otro código HTML que hubiese estado escrito allí originalmente.

Escribir en el código con la función print()
El lenguaje PHP posee una función que es una de las más utilizadas de todas. Hablamos de la función print(), que le indica al software intérprete de PHP que “escriba” en el código fuente de la página que devolverá al navegador del usuario –aquello que pongamos entre sus paréntesis.

Ya hemos utilizado intuitivamente esta función en los ejemplos anteriores. Si lo que deseamos es que se escriba en el código de la página un texto, literalmente, debemos escribirlo entre comillas dentro de sus paréntesis.

EJEMPLO:
<?php
print(“hola”);
?>

Si sólo tuviéramos que escribir texto y nunca código HTML, no tendríamos problemas pero, como debemos encerrar entre comillas el texto a mostrar, se nos planteará un problema a la hora de escribir código HTML que, a su vez tenga comillas dentro.

En el siguiente ejemplo, veremos por qué:

<?php
print(“<h1 class=”portada”>Bienvenidos</h1>”);
?>

Este ejemplo generará un error, pues la comilla ubicada luego del signo = está cumpliendo, sin querer, la función de cerrar la primera de las comillas –la que se abrió al inicio del print luego del paréntesis inicial- y, por lo tanto, el tramo de texto se da por concluido y al resto que sigue a esa comilla el software intérprete de PHP no sabe cómo tratarlo, y lo advierte mostrando un mensaje de error en la pantalla.

Una posible solución al problema de las comillas es desactivar (a esto se de denomina “escapar”) todas las comillas dobles intermedias, una por una, para que no den por concluida la cadena de texto antes de que lleguemos a la última comilla doble que indica el término de la función print.

El carácter de escape es la barra intertida \ y sirve para no ejecutar el carácter que le sigue inmediatamente como si fuera parte de una orden del lenguaje PHP, sino que lo considera como una letra más que debe ser escrita literalmente.

Por esta razón, el ejemplo anterior quedará así:

<?php
print (“<h1 class=\”portada\”>Bienvenidos</h1>”);
?>

Esto funciona muy bien en frases cortas, pero el mayor inconveniente o molestia que nos puede causar surge cuando tenemos que imprimir largos bloques de código HTML, ya que es muy probable que esos bloques (tal vez páginas enteras) ya los tengamos escritos previamente, generados por nuestro editor de código HTML, y casi es seguro que poseerán numerosas comillas dobles.

En estos casos, estaríamos obligados a la tediosa tarea de encontrar las comillas una por una, y “escaparlas” anteponiéndoles una barra invertida o, en su defecto, podríamos utilizar las herramientas de búsqueda y reemplazo de caracteres de alguno de los editores HTML para buscar una comilla y reemplazarla por la barra de escape más la comilla. Pero, ambos casos, sería una larga y aburrida tarea.

Mucho mejor que esto, sería utilizar comillas simples para delimitar el inicio y final del bloque de texto a imprimir:

<?php
print(‘<h1 class=”portada”>Bienvenidos</h1>’);
?>

¡Y problema solucionado!

Cómo funciona el comando “echo”
Este comando (no es una función) también puede utilizar optativamente comillas simples o dobles para delimitar lo que va a imprimir, de la misma manera que print. Pero, a diferencia de print, no es habitual envolver entre paréntesis lo que escribirá.

EJEMPLO:
<?php
echo “Hola Mundo entre comillas dobles!”;
echo '<html>
<head>
<title>Envuelvo entre comillas simples</title>
</head>
<body>”Esto tiene comillas dobres, “muchas comillas”, y no importa”
</body>
</html>';
?>
