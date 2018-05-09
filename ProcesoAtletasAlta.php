<?php
    // PROCESO ATLETAS ALTA
    
    // conectar al servidor y base de datos
    include "conexion.inc";
    // capturar datos del formulario
    $nombre         = utf8_decode($_POST["NOM"]);
    $edad           = $_POST["EDAD"];
    $origen         = $_POST["ORG"];
    $disciplina     = $_POST["DISC"];
    // crear sentencia sql
    $sql  = "INSERT INTO atleta";
    $sql .= "(IDAtleta,NomAtleta,EdadAtleta,OrgAtleta,DiscAtleta) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$nombre','$edad','$origen',$disciplina)";
    // ejecutar sentencia sql
    // die($sql);
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);            
    // volver automáticamente al formulario
    header("Location: FormAtletasAlta.php");
?>