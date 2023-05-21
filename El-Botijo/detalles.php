<?php
include("./php/conexion.php");
if (isset($_GET['detalles'])) {
    $idJuego = $_GET['id_juego'];
    $query = $conexion->query("SELECT * FROM juego WHERE ID = ('$idJuego')");
    $fila = $query->fetch_array();
    $categoriasNombre = $conexion->query("SELECT * FROM categoria WHERE ID = $fila[3]");
    $filaCategoria = $categoriasNombre->fetch_array();
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Proyecto 1DAW - SOLVAM</title>

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="./css/mainpage.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/detalles.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&display=swap" rel="stylesheet">
    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- JS ================================================== -->
</head>

<body>
    <?php
    include("./php/menu.php");
    ?>
    <div id="detalles">
        <div id="imagen">
            <img src="./img/imgjuegos/<?php echo $fila[5] ?>" alt="" width=550px height="700px">
        </div>
        <div id="detallescontenido">
            <div id="textodetalles">
                <p>
                    <?php echo $fila[1] ?>
                </p>
                <p></p>
                <p>
                    <?php echo $fila[6] ?>
                </p>
                <p class="listadetalles">EDITORIAL:
                    <?php echo $fila[7] ?>
                </p>
                <p>--------------------------------------------</p>
                <p class="listadetalles">JUGADORES MÁXIMOS:
                    <?php echo $fila[2] ?>
                </p>
                <p>--------------------------------------------</p>
                <p class="listadetalles">CATEGORIA:
                    <?php echo $filaCategoria[1] ?>
                </p>
                <p>--------------------------------------------</p>
                <p class="listadetalles">EDAD MÍNIMA:
                    <?php echo $fila[4] ?>
                    AÑOS
                </p>
                <p>--------------------------------------------</p>
            </div>
            <div id="botonesdetalles">
                <div>
                    <a href="">Más información →</a>
                </div>
                <div>
                    <a href="./index.php">Volver atrás</a>
                </div>
            </div>
        </div>
        <p class="limpiar"></p>
    </div>
    <?php
    include("./php/pie.php");
    ?>
</body>

</html>