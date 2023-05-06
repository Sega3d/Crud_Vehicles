<?php
session_start();
//recibimos las variables del formulario inicial y realizamos una conexion a la base de datos para verificar la identidad
$usuario=$_POST['usuario'];
$password=$_POST['password'];


$_SESSION['usuario']=$usuario;

$mysqli = new mysqli("localhost", "root", "", "phase2");

$consulta="SELECT * FROM controlador where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($mysqli,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    header("location:crud.php");
}else{
    
    //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a la pagina inicial
    echo '<script>alert("El nombre de usuario o contraseña son incorrectos")</script> ';
	echo "<script>location.href='index.php'</script>";
    
}
mysqli_free_result($resultado);
mysqli_close($mysqli);

?>