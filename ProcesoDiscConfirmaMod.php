<?php
    // PROCESO CONFIRMA ID DE DISCIPLINA EN MYSQL
    
    // conectar al servidor y base de datos
    include "conexion.inc";
    // capturar datos del formulario
    $id = $_POST["DID"];
    // crear sentencia sql
    $sql  = "SELECT * FROM disciplina WHERE DiscipID='$id'";
    // ejecutar sentencia sql
    //die($sql);
    $result = mysql_query($sql,$conex);
    // controlar existencia
    if (mysql_num_rows($result)==0) {
        header("Location: PagError.php?MSG=ID INEXISTENTE");
    } // endif
    // cargar registro
    $regDISC = mysql_fetch_array($result);
    // convertir textos a utf8
    $disciplina     = utf8_encode($regDISC["DiscipNom"]);        
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
 <h1>Athletic.Web</h1>
</div>
<!-- sección menú -->
<?php 
    include "menu.inc";
?>
<!-- sección contenido -->
<div id="contenido">
 <fieldset id="frm">
  <legend>Actualizar</legend>
   <form id="confirmadiscFRM" action="ProcesoDiscMod.php" method="POST">
    <table id="tblFRM">
     <tr>
      <td><b>ID:</b></td>
      <td>
       <input   id="DiscID"
                type="text"
                maxlength="5"
                title="Sólo lectura"
                name="DID"
                readonly="true"
       <?php
            echo " value='$regDISC[DiscipID]'";
       ?>
       />
      </td>
     </tr>    
     <tr>
     <td><b>Nombre:</b></td>
      <td>
       <input id="DiscNOM" 
              type="text" 
              name="NMD"
              maxlength="50" 
              title="Máximo 50 caracteres"
       <?php
            echo " value='$disciplina'";
       ?>                            
        />
      </td>
     </tr>
     <tr>
      <td colspan="2">
       <input type="button" value="Actualizar" onclick="CheckDisc();" class="button"/>      
       <input type="button" value="Cancelar"onclick="CancelarDiscMod();" class="button"/>
      </td>
     </tr>                    
    </table>
   </form>
 </fieldset>
</div>
</body>
</html>