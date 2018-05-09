<?php
    // PROCESO BORRADO 
    
    // conectar al servidor y base de datos
    include "conexion.inc";
    // capturar ID del formulario
    $id = $_POST["ID"];
     // crear sentencia sql
    $sql  = "SELECT * FROM atleta WHERE IDAtleta=$id";
    // ejecutar sentencia sql
    $result = mysql_query($sql,$conex);
    // cargar registro
    $regATLETA = mysql_fetch_array($result);
    // crear sentencia SQL para eliminación
    $sqldel  = "DELETE FROM atleta WHERE IDAtleta=$id";

    // ejecutar sentencia SQL
    mysql_query($sqldel,$conex);
    
    // cerrar conexión
    mysql_close($conex);
    
    // volver automáticamente al formulario
    header("Location: FormAtletaMod.php");
?>