<?php
    // PROCESO CONFIRMA ID DE ATLETA EN MYSQL
    
    // conectar al servidor y base de datos
    include "conexion.inc";
    // capturar datos del formulario
    $id = $_POST["ID"];
    // crear sentencia sql
    $sql  = "SELECT * FROM atleta WHERE IDAtleta=$id";
    // ejecutar sentencia sql
    //die($sql);
    $result = mysql_query($sql,$conex);
    // controlar existencia
    if (mysql_num_rows($result)==0) {
        header("Location: PagError.php?MSG=ID INEXISTENTE");
    } // endif
    // cargar registro
    $regATLETA = mysql_fetch_array($result);
    // convertir textos a utf8
    $nombre         = utf8_encode($regATLETA["NomAtleta"]);
    $edad           = $regATLETA["EdadAtleta"];
    $origen         = utf8_encode($regATLETA["OrgAtleta"]);
    $disciplina     = $regATLETA["DiscAtleta"];        
    // cerrar conexión
    mysql_close($conex);            
    // generar formulario con datos para actualizar
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="Pablo Vázquez" content="Athletic.Web" />
	<title>Athletic.Web</title>
    <script type="text/javascript" src="FuncionesAtletas.js"></script>
    <link rel="stylesheet" href="EstiloAthletic.css" />
</head>

<body>
<!-- seccion cabecera -->
<div id="head">
 <img src="images/logo.jpg" width="300" height="200" id="logo"/>
 <h1>Athletic.Web</h1>
 <h2>Atletas</h2>
</div>
<!-- sección menú -->
<?php 
    include "menu.inc";
?>
<!-- sección contenido -->
<div id="contenido">
 <fieldset id="frm">
  <legend>Actualizar</legend>
   <form id="dataFRM" action="ProcesoAtletasMod.php" method="POST">
    <table id="tblFRM">
     <tr>
      <td>ID:</td>
      <td>
       <input id="dataID" 
              type="text" 
              name="ID"
              maxlength="5"
              readonly="true" 
       <?php
            echo " value='$regATLETA[IDAtleta]'";
       ?>
       />
      </td>
     </tr>    
     <tr>
     <td><b>Nombre:</b></td>
      <td>
       <input id="AtletaNOM" 
              type="text" 
              name="NOM"
              maxlength="50" 
              title="Máximo 50 caracteres"
       <?php
            echo " value='$nombre'";
       ?>                            
        />
      </td>
     </tr>
     <tr>
      <td><b>Edad:</b></td>
      <td>
       <input id="AtletaEDAD" 
              type="text" 
              name="EDAD"
              maxlength="2" 
              title="Máximo 2 caracteres"
       <?php
            echo " value='$edad'";
       ?>
       />
      </td>
     </tr>
     <tr>
      <td><b>Origen:</b></td>
      <td>
       <select id="AtletaORG" name="ORG" title="Deshabilitado">
       <?php
       if ($origen=="1") {
        echo "<option value='0'>---Seleccionar Origen---</option>\n";
        echo "<option value='1' selected>Bélgica</option>\n";
        echo "<option value='2'>Holanda</option>\n";
        echo "<option value='3'>Suecia</option>\n";
       } //end if
       if ($origen=="2") {
        echo "<option value='0'>---Seleccionar Origen---</option>\n";
        echo "<option value='1'>Bélgica</option>\n";
        echo "<option value='2' selected>Holanda</option>\n";
        echo "<option value='3'>Suecia</option>\n";
       } //end if
       if ($origen=="3") {
        echo "<option value='0'>---Seleccionar Origen---</option>\n";
        echo "<option value='1'>Bélgica</option>\n";
        echo "<option value='2'>Holanda</option>\n";
        echo "<option value='3' selected>Suecia</option>\n";
       } //end if
       ?>
       </select>                           
      </td>
     </tr>
     <tr>
      <td><b>Disciplina:</b></td>
      <td>
       <select id="AtletaDISC" name="DISC" title="Deshabilitado">
         <?php
            // generar combo box
            include "LoadDiscSel.inc";
         ?>    
       </select>              
      </td>
     </tr>
     <tr>
      <td colspan="2">
       <input type="button" value="Actualizar" onclick="CheckForm();" class="button"/>      
       <input type="button" value="Cancelar"   onclick="CancelarModAtleta()" class="button"/>
      </td>
     </tr>                    
    </table>
   </form>
 </fieldset>
</div>
</body>
</html>