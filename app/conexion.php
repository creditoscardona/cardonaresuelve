<?php

$conexion = null;
$serverName = "89.22.112.154\SQLEXPRESS";
$bd = "cardonaresuelve";
$user = "cardonaresuelve";
$pass = "Creditosc@rdona2022";

try {
    // new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
    $conexion = new PDO("sqlsrv:server=$serverName;database=$bd", $user, $pass);
}catch(PDOException $e){
    echo "Error de conexion!".$e;
    exit;
}

return $conexion;

