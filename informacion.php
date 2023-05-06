<?php

include("conexion.php");
include("funciones.php");
 //En el bloque siguiente recorremos toda la info a traves de un for y la llevamos hasta la tabla para ser visualizada por el usuario
if (isset($_POST["id_usuario"])) {
    $salida = array();
    $stmt = $conexion->prepare("SELECT * FROM informacion WHERE id = '".$_POST["id_usuario"]."' LIMIT 1");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach($resultado as $fila){
        $salida["tipoV"] = $fila["tipoV"];
        $salida["modelo"] = $fila["modelo"];
        $salida["matricula"] = $fila["matricula"];
        $salida["color"] = $fila["color"];
        $salida["cantidad"] = $fila["cantidad"];
        if ($fila["imagen"] != "") {
            $salida["imagen_usuario"] = '<img src="img/' . $fila["imagen"] . '"  class="img-thumbnail" width="100" height="50" /><input type="hidden" name="imagen_usuario_oculta" value="'.$fila["imagen"].'" />';
        }else{
            $salida["imagen_usuario"] = '<input type="hidden" name="imagen_usuario_oculta" value="" />';
        }
    }

    echo json_encode($salida);
}
?>