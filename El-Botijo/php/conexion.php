<?php
$conexion = new mysqli("localhost", "abriljavier.com.es", "javierabril.", "ja_proyectobbdd");

if ($conexion->connect_error) {
    die('No se ha podido conectar');
} else {
    echo "conexion con éxito";
}