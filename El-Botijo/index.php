<?php
include("./php/conexion.php");
$sqlnoticia = $conexion->query("SELECT * FROM juego") or die($conexion->error);
$sql = $conexion->query("SELECT * FROM juego LIMIT 12 ") or die($conexion->error);
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
    <div id="contenido">
        <div id="first-content">
            <div id="joder">
                <div id="contenedorgaleria">
                    <div class="gallery">
                        <div><img src="./img/Banner/boardgame_banner.jpg" alt="" height="200px" width="650px"></div>
                        <div><img src="./img/Banner/dnd_banner_1.png" alt="" height="200px" width="650px"></div>
                        <div><img src="./img/Banner/dnd_banner_2.jpg" alt="" height="200px" width="650px"></div>
                        <div><img src="./img/Banner/scyte_banner.jpg" alt="" height="200px" width="650px"></div>
                        <div><img src="./img/Banner/warha_banner_1.jpg" alt="" height="200px" width="650px"></div>
                    </div>
                </div>
            </div>
            <div id="contenedortexto">
                <?php $primeranoticia = $sqlnoticia->fetch_array() ?>
                <p class="titular"> El juego de la semana es ...
                    <?php echo $primeranoticia[1] ?>
                </p>
                <p class="subtitular">Editorial
                    <?php echo $primeranoticia[7] ?>
                </p>
                <p class="cuerpo">
                    <?php echo $primeranoticia[6] ?>
                </p>
            </div>
        </div>
        <div id="main-content">
            <?php
            while ($fila = $sql->fetch_array()) {
                ?>
                <div class="caja">
                    <div class="imagencaja">
                        <img src="./img/imgjuegos/<?php echo $fila[5] ?>" alt="" width=250px height=220px>
                    </div>
                    <div class="divtextocaja">
                        <p class="textocaja">
                            <?php echo $fila[1]; ?>
                        </p>
                    </div>
                    <div class="lupa">
                        <a href="./img/imgjuegos/<?php echo $fila[5] ?>"></a>
                    </div>
                    <div class="acceder">
                        <a href="detalles.php?detalles&id_juego=<?php echo $fila[0]; ?>"></a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <p class=" limpiar"></p>
    </div>
    <?php
    include("./php/pie.php");
    ?>
</body>

</html>