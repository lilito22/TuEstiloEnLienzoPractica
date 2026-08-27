<?php

require_once "../app/config/conexion.php";

$basedatos = new Database();
$conexion = $basedatos->conectar();

if ($conexion) {
    echo "conexion exitosa";
}
else {
    echo "no sirve";
}