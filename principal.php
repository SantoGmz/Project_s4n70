<?php
session_start();

$titulo = "INICIO "; 
require("app/recursos/head.php"); 
require "app/mis_funciones.php"; 

// Si el usuario no está logeado no podra ver esta pagina
if (isset($_SESSION['usuario_id']) == false) {
    // REDIRECCIONAR al login
    header("Location: index.php");
}


require("app/_principal.vista.php");

?>




   