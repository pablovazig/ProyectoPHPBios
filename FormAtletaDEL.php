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
  <h2>Atletas</h2>
</div>

<!---menú--->
<?php
  include "menu.inc";
?>
<div id="contenido">
 <fieldset id="frm">
  <legend>Inserte ID de atleta</legend>
   <form id="dataFRM" action="ProcesoAtletaConfirmaDEL.php" method="POST">
    <table id="tblFRM">
    <tr>
     <td><b>ID:</b></td>
     <td>
     <input 
     id="AtletaID"
     type="text"
     maxlength="5"
     title="Máximo 5 caracteres"
     name="ID"
     />
     </td>     
    </tr>
      <tr>
      <td colspan="2">
       <input type="button" value="Enviar"   onclick="CheckID();" class="button"/>
       <input type="reset"  value="Cancelar" class="button"/>
       <input type="button" value="Volver"   onclick="BtnVolverAt();" class="button"/>
      </td>
     </tr>                    
    </table>
   </form>
 </fieldset>
 </div>
 </body>
</html>