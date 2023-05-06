<?php
/* En este bloque hacemos un llamado a la pagina conexion para estar activos en la bd y funciones para continuar las intruciones que se recogen del formulario y permitir
*la eliminacion de los datos selecionados en la tabla de informacion */
include('conexion.php');
include("funciones.php");

if(isset($_POST["id_usuario"]))
{
	$imagen = NombreImg($_POST["id_usuario"]);
	if($imagen != '')
	{
		unlink("img/" . $imagen);
	}
	$stmt = $conexion->prepare(
		"DELETE FROM informacion WHERE id = :id" //Conexion a la bd y eliminamos el id correspondiente en la tabla





		
	);
	$resultado = $stmt->execute(
		array(
			':id'	=>	$_POST["id_usuario"]
		)
	);
	
	if(!empty($resultado))
	{
		echo 'Información eliminada';
	}
}



?>