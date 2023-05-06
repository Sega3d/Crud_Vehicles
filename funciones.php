<?php
    //Creamos una funcion para cargar la imagen en la base de datos, damos un nombre aleatorio y la guardamos en la carpeta IMG
    function CargarImg(){
        if (isset($_FILES["imagen_usuario"])) {
          
            $extension = explode('.', $_FILES["imagen_usuario"]['name']);
            $nuevo_nombre = rand() . '.' .$extension[1];
            $ubicacion = './img/' .$nuevo_nombre;
            move_uploaded_file($_FILES["imagen_usuario"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }
    //Una vez creado el nombre de la img de manera aleatoria procedemos a cambiarlo en la BD
    function NombreImg($id_usuario){
        include('conexion.php');
        $stmt = $conexion->prepare("SELECT imagen FROM usuario WHERE id = '$id_usuario'");
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach($resultado as $fila){
            return $fila["imagen"];
        }
    }
    //Esta funcion para mostrar toda la informacion de la BD en la tabla
    function ListarInfo(){
        include('conexion.php');
        $stmt = $conexion->prepare("SELECT * FROM usuario");
        $stmt->execute();
        $resultado = $stmt->fetchAll(); 
        return $stmt->rowCount();       
    }
?>