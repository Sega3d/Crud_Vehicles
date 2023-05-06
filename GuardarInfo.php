<?php

include("conexion.php");
include("funciones.php");
//Este primer bloque de codigo se usa para cargar la informacion que se ingresa en el formulario, insertar a la bd
if ($_POST["operacion"] == "Crear") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = CargarImg();
    }
    $stmt = $conexion->prepare("INSERT INTO informacion(tipoV, modelo, matricula, color, cantidad, imagen )VALUES(:tipoV, :modelo, :matricula, :color, :cantidad, :imagen )");

    $resultado = $stmt->execute(
        array(
            ':tipoV'    => $_POST["tipoV"],
            ':modelo'    => $_POST["modelo"],
            ':matricula'    => $_POST["matricula"],                      
            ':color'    => $_POST["color"],
            ':cantidad'    => $_POST["cantidad"],
            ':imagen'    => $imagen 
        )
    );

    if (!empty($resultado)) {
        echo 'Información registrada exitosamente';
    }
}

//Este segundo bloque de codigo se usa para editar la informacion que se ingresa en el formulario, actualizar la bd
if ($_POST["operacion"] == "Editar") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = CargarImg();
    }else{
        $imagen = $_POST["imagen_usuario_oculta"];
    }


    $stmt = $conexion->prepare("UPDATE informacion SET tipoV=:tipoV, modelo=:modelo, matricula=:matricula,  color=:color, cantidad=:cantidad, imagen=:imagen  WHERE id = :id");

    $resultado = $stmt->execute(
        array(
            ':tipoV'    => $_POST["tipoV"],
            ':modelo'    => $_POST["modelo"],
            ':matricula'    => $_POST["matricula"],            
            ':color'    => $_POST["color"],
            ':cantidad'    => $_POST["cantidad"],
            ':imagen'    => $imagen,
            ':id'    => $_POST["id_usuario"]
        )
    );

    if (!empty($resultado)) {
        echo 'Informacion actualizada';
    }
}
?>