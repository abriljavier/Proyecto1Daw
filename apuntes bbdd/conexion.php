<?php
$conexion = new mysqli("localhost", "abriljavier.com.es", "javierabril.", "ja_comercio");

if ($conexion->connect_error){
    die('No se ha podido conectar');
} else{
    echo "conexion con éxito";
}
