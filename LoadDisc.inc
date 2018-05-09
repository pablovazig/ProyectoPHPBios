 <?php
    // GENERAR COMBO BOX CON DEPARTAMENTOS ORDENADOS
    // conectar al Servidor de Base de Datos
    include "conexion.inc"; 
    // crear sentencia SQL para mostrar todos los dptos.
    $sql = "SELECT * FROM disciplina ORDER BY DiscipNom";
    // ejecutar senencia SQL
    $result = mysql_query($sql,$conex);
    // recorrer matríz y generar combo box
    while ($regDISC = mysql_fetch_array($result)) {
        // generar opción
        $disciplina = utf8_encode($regDISC["DiscipNom"]);
        echo "<option value='$regDISC[DiscipID]'>$disciplina</option>\n";                
        // echo "<option value='$regDTO[idDTO]'>".utf8_encode($regDTO["nomDTO"])."</option>\n";
    } // end while
    // cerrar conexión
    mysql_close($conex);
 ?> 