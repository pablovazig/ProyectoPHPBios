<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="Pablo Vázquez" content="Athletic.Web" />
    <link rel="stylesheet" href="EstiloAthletic.css" />
    <script type="text/javascript" src="FuncionesAtletas.js"></script>
	<title>Athletic.Web</title>
</head>

<body class="fondo">
<!---cabecera--->
<div id="cabecera">
<img src="images/logo.jpg" width="300" height="200" id="logo"/>
<h1>Athletic.Web</h1>
</div>

<!---menú--->
<?php
  include "menu.inc";
?>

<!---contenido--->
<div id="contenido">
 <fieldset id="bio">
  <legend>Quiénes somos</legend>
    <p>
       Bienvenidos a Athletic.Web. Somos un grupo de entusiastas del deporte y organizamos 
       diversas competencias deportivas entre nuestros miembros.
    </p>
 </fieldset>
 <fieldset id="sistema">
  <legend>Nuestro sistema</legend>
    <p>
       Mediante esta aplicación los usuarios pueden inscribir nuevos atletas, 
       modificar sus datos y eliminar los registros. Además es posible añadir y modificar disciplinas.
    </p>
 </fieldset>
</div>


</body>
</html>