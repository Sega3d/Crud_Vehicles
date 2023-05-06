<?php
    //Este codigo nos permite realizar una conexion a la base de datos MySql
    $usuario = "root";
    $password = "";
    $conexion = new PDO("mysql:host=localhost;dbname=phase2", $usuario, $password);
?>