<!DOCTYPE html>
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
  <h2>Consultas</h2>
</div>

<!---menú--->
<?php
  include "menu.inc";
?>
<!-- sección contenido -->
<div id="cuadroconsulta">
<div id="disciplinas">
 <fieldset id="frm">
  <legend>Consulta de disciplinas</legend>
   <form id="datafiltroFRM" action="ProcesoConsultaDISC.php" method="GET">
    <table id="tblFRM">
      <td colspan="2">
       <input type="submit" value="Listar" class="button"/>
      </td>
     </tr>                    
    </table>
   </form>
 </fieldset>
</div>
<div>
 <fieldset>
   <legend>Consulta de atletas</legend>
   <form id="filtroatletaFRM" action="ProcesoConsultaATL.php" method="GET">
     <table id="tblfiltroFRM">
     <td>Origen:</td>
      <td>
       <select id="AtletaORG" name="ORG">
        <option value="0">---Todos---</option>
        <option value="1">Bélgica</option>
        <option value="2">Holanda</option>
        <option value="3">Suecia</option>
       </select>
       </tr>
       <tr>
       <td>Disciplina:</td>
      <td>
       <select id="AtletaDISC" name="DISC">
        <option value="0">-- Todas las disciplinas --</option>
         <?php
            // generar combo box
            include "LoadDisc.inc";
         ?>    
       </select>
      </td>
      </tr>
      <tr>
       <td colspan="2">
       <input type="submit" value="Listar" class="button"/>
       <input type="reset"  value="Cancelar" class="button"/>
      </td>
      </tr>
     </table>
   </form>
 </fieldset>
</div>
</div>
</body>
</html>