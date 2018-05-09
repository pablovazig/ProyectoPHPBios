<?php
    // PROCESO MODIFICACIÓN DATOS DE ATLETAS 
    
    // conectar al servidor y base de datos
    include "conexion.inc";
    
    // capturar datos del formulario
    $id             = $_POST["ID"];
    $nombre         = utf8_decode($_POST["NOM"]);
    $edad           = $_POST["EDAD"];
    $origen         = utf8_decode($_POST["ORG"]);
    $disciplina     = $_POST["DISC"];      
    // crear sentencia SQL para modificiación
    $sql  = "UPDATE atleta SET ";
    $sql .= "NomAtleta='$nombre',";
    $sql .= "EdadAtleta='$edad',";
    $sql .= "OrgAtleta='$origen',";
    $sql .= "DiscAtleta=$disciplina ";
    $sql .= "WHERE IDAtleta=$id";                                

    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    
    // cerrar conexión
    mysql_close($conex);
    
    // volver automáticamente al formulario de Modificación/Baja
    header("Location: FormAtletaMod.php");
?>