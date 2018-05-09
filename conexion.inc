<?php
    // conectar al servidor de base de datos
    $conex = mysql_connect("localhost","root","");
    // controlar conexión
    if (!$conex) {
        header("Location: PagError.php?MSG=NO se pudo CONECTAR al SERVIDOR de Base de Datos");
    } // endif
    // seleccionar base de datos
    $selDB = mysql_select_db("athleticweb",$conex);
    // controlar selección de Base de Datos
    if (!$selDB) {
        header("Location: PagError.php?MSG=NO se pudo SELECCIONAR Base de Datos");        
    } // endif
?>