<?php
$host ="localhost";
$dbname ="s4n70";
$user = "root";
$password = "";
$opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

//combiarlos valores para produccion

if ($_SERVER['SERVER_NAME'] == "s4n70.000webhostapp.com") {
    $host = "localhost";
    $dbname = "id8911792_proyecto_db";
    $user = "id8911792_s4n70";
    $password = "16051983a";
}

    $conexion = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password, $opciones);

