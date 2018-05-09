 <?php
    // GENERAR COMBO BOX CON DISCIPLINAS ORDENADAS
    // conectar al Servidor de Base de Datos
    include "conexion.inc"; 
    // crear sentencia SQL para mostrar todos los dptos.
    $sql = "SELECT * FROM disciplina ORDER BY DiscipNom";
    // ejecutar senencia SQL
    $result = mysql_query($sql,$conex);
    // recorrer matríz y generar combo box
    while ($regDISC = mysql_fetch_array($result)) {
        //determinar valor de la BD
        if  ($regDISC["DiscipID"]==$regATLETA["DiscAtleta"])
        {
         // generar opción seleccionada
        $disciplina = utf8_encode($regDISC["DiscipNom"]);
        echo "<option value='$regDISC[DiscipID]' selected>$disciplina</option>\n";   
        } else {
        // generar opción sin seleccionar
        $disciplina = utf8_encode($regDISC["DiscipNom"]);
        echo "<option value='$regDISC[DiscipID]'>$disciplina</option>\n";    
        }     
    } // end while
    // cerrar conexión
    mysql_close($conex);
 ?> 