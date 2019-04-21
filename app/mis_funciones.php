<?php

/* Mi funcion para mostrar los errores */
function manejoErrores($codigo, $mensaje, $archivo, $linea) {
    echo "<div class='alert alert-primary alerta' role='alert'>
            <b>Ha ocurrido un error.</b>
            <div>
                <p><i>$mensaje</i></p>
                <p>Error en la linea <b>$linea</b> del archivo <b>$archivo</b></p>
            </div>
        </div>";
}
set_error_handler("manejoErrores");

function imprimir($valor_recibido){
    echo "<pre>";
    var_export($valor_recibido);
    echo"</pre>";

}

function vista($recibir){
    return"app/vistas/$recibir.vista.php";
}

function generardatos($genera){

}

function selectPublicaciones($conexion) {
    // 1. Preparar el query
    $comando = $conexion->prepare("SELECT * FROM publicaciones");
    // 2. Ejecutar el query
    $comando->execute();
    // 3. Traer los datos
    $publicaciones = $comando->fetchAll(PDO::FETCH_ASSOC);
    return $publicaciones;
}

//comprobar si el usuario existe
function comprobarUsuarioExiste($conexion, $correo, $username) {
    // 1. Preparar el query
    $comando = $conexion->prepare("SELECT * FROM usuarios WHERE correo = '$correo' OR username = '$username'");
    // 2. Ejecutar el query
    $comando->execute();
    // 3. Traer los datos
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

//titulo and descripcion titulo descripcion
function RepeatTabla($conexion, $titulo, $descripcion) {
    // 1. Preparar el query
    $comando = $conexion->prepare("SELECT * FROM publicaciones WHERE descripcion = '$descripcion' OR titulo = '$titulo'");
    // 2. Ejecutar el query
    $comando->execute();
    // 3. Traer los datos
    $resultadotabla = $comando->fetchAll(PDO::FETCH_ASSOC);
    return $resultadotabla;
}


function selectCategorias($conexion) {
    $comando = $conexion->prepare("SELECT * FROM categorias");
    $comando->execute();
    $categorias = $comando->fetchAll(PDO::FETCH_ASSOC);
    return $categorias;
}

function selectPublicacionesDelUsuario($conexion, $usuario_id) {
    // 1. Preparar el query
    $comando = $conexion->prepare("SELECT * FROM publicaciones WHERE creado_por = $usuario_id");
    // 2. Ejecutar el query
    $comando->execute();
    // 3. Traer los datos
    $publicaciones = $comando->fetchAll(PDO::FETCH_ASSOC);
    return $publicaciones;
}

