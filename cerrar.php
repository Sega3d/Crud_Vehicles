<?php

if(isset($_GET['cerrar'])) {

  //Vaciamos y destruimos las variables de sesión
  $_SESSION['usuario'] = NULL;

  unset($_SESSION['usuario']);
 

  //Redireccionamos a la pagina index.php
  header('Location: index.php');
}

?>