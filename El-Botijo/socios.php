<?php
include("./php/conexion.php");

if (isset($_GET['nombre'])) {
    $query = $conexion->query("Select socio.ID, socio.nombre, socio.f_nac, socio.puntuacion, cargo.nombre, socio.foto from socio join cargo on socio.cargoID=cargo.ID order by socio.nombre ASC;");
} elseif (isset($_GET['fecha'])) {
    $query = $conexion->query("Select socio.ID, socio.nombre, socio.f_nac, socio.puntuacion, cargo.nombre, socio.foto from socio join cargo on socio.cargoID=cargo.ID order by socio.f_nac ASC;");
} else {
    $query = $conexion->query("Select socio.ID, socio.nombre, socio.f_nac, socio.puntuacion, cargo.nombre, socio.foto from socio join cargo on socio.cargoID=cargo.ID order by socio.puntuacion DESC;");
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
    <link rel="stylesheet" href="./css/contenido.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/socios.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&display=swap" rel="stylesheet">
    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- JS ================================================== -->
</head>

<body>
    <div id="mainpage">
        <?php include("./php/menu.php"); ?>
        <div id="contenidosocios">
            <div>
                <a href="./socios.php?nombre">por nombre</a>
                <p>|</p>
                <a href="./socios.php?fecha">por edad</a>
                <p>|</p>
                <a href="./socios.php?">por puntuación</a>
            </div>
            <div id="descripcion">
                <?php while ($datos = $query->fetch_array()) { ?>
                    <div id="tarjeta">
                        <br>
                        <div class="superior">
                            <div>
                                <img src="./img/usuarios/<?php echo $datos[5] ?>" alt="la cara de uno">
                            </div>
                            <p class="nombre">&nbsp&nbspNombre:
                                <strong>
                                    <?php echo $datos[1] ?>
                                </strong>
                            </p>
                            <p class="fechanacimiento">
                                <?php
                                $nacimiento = new DateTime($datos[2]);
                                $ahora = new DateTime(date("Y-m-d"));
                                $diferencia = $ahora->diff($nacimiento);
                                $formateada = $diferencia->format("%y");
                                echo $formateada
                                    ?> años
                            </p>
                        </div>
                        <div class="inferior">
                            <p class="puntuacion">Puntuación total:
                                <?php echo $datos[3] ?>
                            </p>
                            <p class="cargo"> Tipo de socio:
                                <?php echo $datos[4] ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
                <p class="limpiar"></p>

            </div>
            <p class=" limpiar"></p>
        </div>
        <?php include("./php/pie.php"); ?>
    </div>
</body>

</html>