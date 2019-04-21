<?php
session_start();
require "app/mis_funciones.php"; 


//abre

require "app/conexion.php"; 



// Si el usuario está logeado no puede ver esta página
if(isset($_SESSION['usuario_id']) == true) {
    // REDIRECCIONAR a la pagina principal
    header("Location: principal.php");
}



// Verificar si el inputUser existe
if (isset($_POST['inputUser'])) {
    $datosUsuario = array(
        'username' => $_POST['inputUser'],
        'password' => $_POST['passwd']
    );
    // Preparar el query
    $sql = 'SELECT * FROM usuarios WHERE username = :username and password = :password';
    $comando = $conexion->prepare($sql);

        // Asociar el :username con el valor
    $comando->bindParam(":username", $datosUsuario['username']);
    $comando->bindParam(":password", $datosUsuario['password']);
    // Ejecutar el query
    $comando->execute();

    // Traer los datos
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        imprimir($resultado);
    $cantidadRegistros = count($resultado);

    if ($cantidadRegistros > 0) {

            $_SESSION['usuario_id'] = $resultado[0]['id'];
            $_SESSION['usuario_nombre'] = $resultado[0]['nombre'];
            $_SESSION['usuario_username'] = $resultado[0]['username'];
        header("Location: principal.php");
    } else {
        // Almancenar un mensaje de error para mostrarlo al usuario
        $mensajesError['usuario_incorrecto'] = "El usuario o la contraseña son incorrectos";
    }
}


//cierre

$titulo = "LOGIN "; 
require("app/recursos/head.php"); 
require("app/_index.vista.php");



?>
