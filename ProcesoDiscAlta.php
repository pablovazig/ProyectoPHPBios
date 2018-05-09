<?php
    // PROCESO ALTA DISCIPLINAS
    
    // conectar al servidor y base de datos
    include "conexion.inc";
    // capturar datos del formulario
    $disciplina     = utf8_decode($_POST["ND"]);
    // crear sentencia sql
    $sql  = "INSERT INTO disciplina";
    $sql .= "(DiscipNom) ";
    $sql .= "VALUES ";
    $sql .= "('$disciplina')";
    // ejecutar sentencia sql
    // die($sql);
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);            
    // volver automáticamente al formulario
    header("Location: FormDiscAlta.php");
?>