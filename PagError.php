<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Athletic.Web" />
    <link rel="stylesheet" href="EstiloAthletic.css" />
	<title>Athletic.Web</title>
</head>

<body>
<!-- seccion cabecera -->
<div id="head">
 <h1>Athletic.Web</h1>
</div>
<!-- sección menú -->
<?php
  include "menu.inc";
?>
<!-- sección contenido -->
<div id="contenido">
 <fieldset id="dsc">
  <legend>¡¡¡ERROR!!! </legend>
    <br />
    <?php
        // leer mensaje de error a presentar
        $mensaje = $_GET["MSG"];
        echo "<span class='error'>¡ ¡ ¡A T E N C I O N ! ! ! : </span><br />\n";
        echo "<span>$mensaje</span><br />\n";
    ?>
 </fieldset>
</div>

</body>
</html>