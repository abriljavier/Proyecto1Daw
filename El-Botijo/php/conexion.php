<?php
$conexion = new mysqli("localhost", "abriljavier", "javierabril.", "ja_proyectobbdd");

if ($conexion->connect_error) {
    die('No se ha podido conectar');
}