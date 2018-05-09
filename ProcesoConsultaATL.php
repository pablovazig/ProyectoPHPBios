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
            // si no existe orden establecerlo a ID
            $orden = "IDAtleta";
        } // endif
        // capturar filtro
        if (isset($_GET["ORG"])){
            // si existe filtro leerlo
            $origen = $_GET["ORG"];
        } else {
            // si no existe filtro establecerlo a nada
            $origen = "0";
        } // endif
        // capturar filtro
        if (isset($_GET["DISC"])){
            // si existe filtro leerlo
            $disciplina = $_GET["DISC"];
        } else {
            // si no existe filtro establecerlo a nada
            $disciplina = "0";
        } // endif
        // determinar filtro
        if ($disciplina=="0" && $origen=="0") {
            $filtro = "";
        } else {
        if($origen!=0&&$disciplina==0) {
            $filtro = "WHERE OrgAtleta='$origen'";    
            } else {
             if($disciplina!=0&&$origen==0) {
            $filtro = "WHERE DiscAtleta='$disciplina'";    
                } else {
                    $filtro = "WHERE OrgAtleta='$origen' AND DiscAtleta='$disciplina'";
                } //end if  
            }//end if
        } // endif
        // crear sentencia SQL
        $sql  = "SELECT a.IDAtleta,a.NomAtleta,a.EdadAtleta,a.OrgAtleta,a.DiscAtleta, d.DiscipID, d.DiscipNom ";
        $sql .= "FROM atleta AS a ";
        $sql .= "JOIN disciplina AS d ";
        $sql .= "ON a.DiscAtleta=d.DiscipID ";
        $sql .= "$filtro ORDER BY $orden ";
        
        //die($sql);
        // ejectutar sentencia SQL
        $result = mysql_query($sql,$conex);
        // generar columnas cabeceras de la grilla
        echo "<tr>
              <th>
               <a href='ProcesoConsultaATL.php?ORD=IDAtleta&ORG=$origen&DISC=$disciplina' class='button'>ID</a>
              </th>
              <th>
               <a href='ProcesoConsultaATL.php?ORD=NomAtleta&ORG=$origen&DISC=$disciplina' class='button'>NOMBRE</a>
              </th>
              <th>
               <a href='ProcesoConsultaATL.php?ORD=EdadAtleta&ORG=$origen&DISC=$disciplina' class='button'>EDAD</a>
              </th>
              <th>
               <a href='ProcesoConsultaATL.php?ORD=OrgAtleta&ORG=$origen&DISC=$disciplina' class='button'>ORIGEN</a>
              </th>
              <th>
               <a href='ProcesoConsultaATL.php?ORD=DiscAtleta&ORG=$origen&DISC=$disciplina' class='button'>DISCIPLINA</a>
              </th>
              ";    
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
            echo " <td style='text-align:right;'>$reg[IDAtleta]</td>\n";
            echo " <td>".utf8_encode($reg["NomAtleta"])."</td>\n";
            echo " <td>".$reg["EdadAtleta"]."</td>\n";
            if ($reg["OrgAtleta"]== 1) {
             echo " <td>Bélgica</td>\n";    
            } else {
                if ($reg["OrgAtleta"]== 2) {
                    echo " <td>Holanda</td>\n";
                } else {
                    echo " <td>Suecia</td>\n";
                } //end if
            } //end if
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