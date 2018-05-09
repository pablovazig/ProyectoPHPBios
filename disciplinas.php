<html>
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="Pablo Vázquez" content="Athletic.Web" />
  <link rel="stylesheet" href="EstiloAthletic.css" />
  <script type="text/javascript" src="FuncionesAtletas.js"></script>
  <title>Athletic.Web</title>
 </head>
 <body>
 <!---cabecera--->
<div id="cabecera">
  <img src="images/logo.jpg" width="300" height="200" id="logo"/>
  <h1>Athletic.Web</h1>
  <h2>Disciplinas</h2>
</div>

<!---menú--->
<?php
  include "menu.inc";
?>
<!---submenú opciones--->
<div id="opciones">
  <fieldset>
    <legend>Opciones</legend>
    <a href="FormDiscAlta.php" class="button">Alta</a><br /><br />
    <a href="FormDiscMod.php" class="button">Modificaciones</a>
  </fieldset>
</div>
 </body>
</html>