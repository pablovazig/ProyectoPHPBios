<?php
    // PROCESO MODIFICACIÓN DATOS DE DISCIPLINAS 
    
    // conectar al servidor y base de datos
    include "conexion.inc";
    
    // capturar datos del formulario
    $id             = $_POST["DID"];
    $disciplina     = utf8_decode($_POST["NMD"]);      
    // crear sentencia SQL para modificiación
    $sql  = "UPDATE disciplina SET ";
    $sql .= "DiscipNom='$disciplina' ";
    $sql .= "WHERE DiscipID='$id'";                                
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    
    // cerrar conexión
    mysql_close($conex);
    
    // volver automáticamente al formulario de Modificación
    header("Location: FormDiscMod.php");
?>