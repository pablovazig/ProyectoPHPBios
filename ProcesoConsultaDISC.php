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
<div id="cabecera"><h1>Athletic.Web</h1>
<h2>Consultas</h2>
</div>

<!---menú--->
<?php
  include "menu.inc";
?>
<!-- sección contenido -->
<div id="contenido">
 <fieldset id="listado">
  <legend>Listado</legend>
    <table id="lst">
    <?php
        // conectar al servidor y base de datos
        include "conexion.inc";
        // capturar orden
        if (isset($_GET["ORD"])) {
            // si existe orden leerlo
            $orden = $_GET["ORD"];    
        } else {
            // si no existe orden establecerlo a nombre
            $orden = "DiscipNom";
        } // endif
       
        // crear sentencia SQL
        $sql  = "SELECT DiscipID,DiscipNom ";
        $sql .= "FROM disciplina ";
        $sql .= "ORDER BY $orden ";
        
        //die($sql);
        // ejectutar sentencia SQL
        $result = mysql_query($sql,$conex);
        // generar columnas cabeceras de la grilla
        echo "<tr>
              <th>
               <a href='ProcesoConsultaDISC.php?ORD=DiscipID&DISC=$disciplina' class='button'>ID</a>
              </th>
              <th>
               <a href='ProcesoConsultaDISC.php?ORD=DiscipNom&DISC=$disciplina' class='button'>NOMBRE</a>
              </th>";        
        // mostrar / generar filas (grilla) de datos
        
        $fila = 1;
        while ($reg=mysql_fetch_array($result)) {
            // mostrar registro
            // determinar fila par / impar
            $resto = $fila % 2;
            if ($resto==0) {
                // generar fila par
                echo "<tr class='par'>\n";    
            } else {
                // generar fila impar
                echo "<tr class='impar'>\n";
            } // endif
            // generar columnas
            echo " <td style='text-align:right;'>$reg[DiscipID]</td>\n";
            echo " <td>".utf8_encode($reg["DiscipNom"])."</td>\n";
            // cerrar fila            
            echo "</tr>\n";
            // imcrementar número de fila
            $fila++;
        } // end while
        // cerrar conexión a Base de Datos
        mysql_close($conex);
    ?>
    </table>
 </fieldset>
</div><br />
<div>
<input type="button" value="Volver"   onclick="FinConsulta();" class="button"/>
</div>

</body>
</html>