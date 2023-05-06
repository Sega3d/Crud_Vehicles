<?php

    include("conexion.php");
    include("funciones.php");

    $query = "";
    $salida = array();
    $query = "SELECT * FROM informacion ";
    //Creamos una condiccion para realizar una busqueda inmediata en la tabla y mostrar los valores similares
    if (isset($_POST["search"]["value"])) {
       $query .= 'WHERE tipoV LIKE "%' . $_POST["search"]["value"] . '%" ';
       $query .= 'OR modelo LIKE "%' . $_POST["search"]["value"] . '%" ';
       $query .= 'OR matricula LIKE "%' . $_POST["search"]["value"] . '%" ';
       $query .= 'OR id LIKE "%' . $_POST["search"]["value"] . '%" ';
    }
    //Damos una organizacion a la informacion de la busqueda en caso de ser solo 1 y si son varias en orden ascendente
    if (isset($_POST["order"])) {
        $query .= 'ORDER BY' . $_POST['order']['0']['column'] .' '.$_POST["order"][0]['dir'] . ' ';        
    }else{
        $query .= 'ORDER BY id ASC ';
    }

    if($_POST["length"] != -1){
        $query .= 'LIMIT ' . $_POST["start"] . ','. $_POST["length"];
    }
    //En el bloque siguiente recorremos toda la info a traves de un for y la llevamos en un array hasta la tabla para ser visualizada por el usuario
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    $datos = array();
    $filtered_rows = $stmt->rowCount();
    foreach($resultado as $fila){
        $imagen = '';
        if($fila["imagen"] != ''){
            $imagen = '<img src="img/' . $fila["imagen"] . '"  class="img-thumbnail" width="50" height="35" />';
        }else{
            $imagen = '';
        }

        $sub_array = array();
        $sub_array[] = $fila["id"];
        $sub_array[] = $fila["tipoV"];
        $sub_array[] = $fila["modelo"];
        $sub_array[] = $fila["matricula"];                 
        $sub_array[] = $fila["color"];
        $sub_array[] = $fila["cantidad"];
        $sub_array[] = $imagen;                      
        $sub_array[] = '<button type="button" name="editar" id="'.$fila["id"].'" class="btn btn-warning btn-xs editar">Editar</button>';
        $sub_array[] = '<button type="button" name="borrar" id="'.$fila["id"].'" class="btn btn-danger btn-xs borrar">Eliminar</button>';
        $datos[] = $sub_array;
    }

    $salida = array(
        "draw"               => intval($_POST["draw"]),
        "recordsTotal"       => $filtered_rows,
        "recordsFiltered"    => ListarInfo(),
        "data"               => $datos
    );

    echo json_encode($salida);
    ?>