<html>
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="Pablo Vázquez" content="Athletic.Web" />
  <script type="text/javascript" src="FuncionesAtletas.js"></script>
  <link rel="stylesheet" href="EstiloAthletic.css" />
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
<div id="contenido">
 <fieldset id="frm">
  <legend>Insertar</legend>
   <form id="discFRM" action="ProcesoDiscAlta.php" method="POST">
    <table id="tblFRM">
     <tr>
      <td><b>Nombre Disciplina:</b></td>
      <td>
       <input id="NombreDISC" 
              type="text" 
              name="ND"
              maxlength="50" 
              title="Máximo 50 caracteres"
       />
      </td>
      </tr>
      <tr>
      <td colspan="2">
       <input type="button" value="Enviar"   onclick="CheckDisc();" class="button"/>
       <input type="reset"  value="Cancelar" class="button"/>
       <input type="button" value="Volver"   onclick="BtnVolverDisc();" class="button"/>
      </td>
     </tr>                    
    </table>
   </form>
 </fieldset>
</div>
</html>