<?php
include("./php/conexion.php");
$sql = $conexion->query("SELECT * FROM partida LIMIT 4");
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
    <link rel="stylesheet" href="./css/blog.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&display=swap" rel="stylesheet">
    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- JS ================================================== -->
</head>

<body>
    <div id="mainpage">
        <?php
        include("./php/menu.php");
        ?>
        <div id="blogcontenido">
            <div id="listaentradas">
                <?php
                while ($entrada = $sql->fetch_array()) {
                    $sqlnombre1 = $conexion->query("SELECT * FROM socio WHERE ID=('$entrada[4]')");
                    $sqlnombre2 = $conexion->query("SELECT * FROM socio WHERE ID=('$entrada[5]')");
                    $sqljuego = $conexion->query("SELECT * FROM juego WHERE ID=('$entrada[3]')");
                    ?>
                    <div class="entrada">
                        <div class="entradaimg">
                        </div>
                        <div class="entradatexto">
                            <div>
                                <?php
                                while ($nombre = $sqlnombre1->fetch_array()) {
                                    echo $nombre[1];
                                } ?> VS
                                <?php
                                while ($nombre = $sqlnombre2->fetch_array()) {
                                    echo $nombre[1];
                                } ?> ,
                                <?php echo $entrada[1] ?>
                            </div>
                            <div> El día
                                <?php echo $entrada[1] ?> jugaron a
                                <?php
                                while ($nombre = $sqljuego->fetch_array()) {
                                    echo $nombre[1];
                                } ?> nuestros compañeros
                                <?php
                                while ($nombre = $sqlnombre1->fetch_array()) {
                                    echo $nombre[1];
                                } ?> y
                                <?php
                                while ($nombre = $sqlnombre2->fetch_array()) {
                                    echo $nombre[1];
                                } ?>. Pásate y no te pierdas la siguiente.
                            </div>
                            <div class="cajainfo">
                                <div>
                                    <?php echo $entrada[1] ?>
                                </div>
                                <div>
                                    <?php if ($entrada[3] == 1) { ?>Clasificatorio
                                    <?php } else { ?>Amistoso
                                    <?php } ?>
                                </div>
                                <div>
                                    <?php
                                    while ($nombre = $sqljuego->fetch_array()) {
                                        echo $nombre[1];
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div id="bannerderecho">
                <div id="buscador">
                    <form action="">
                        <input type="text" name="" id="">
                        <input type="submit" value="">
                    </form>
                </div>
                <div id="categorias">
                    <p class="headerblog">POR JUEGO</p>
                    <ul>
                        <li>CAT1</li>
                        <li>CAT2</li>
                        <li>CAT3</li>
                    </ul>
                </div>
                <div id="categorias">
                    <p class="headerblog">POR SOCIO</p>

                    <ul>
                        <li>CAT1</li>
                    </ul>
                </div>
                <div id="categorias">
                    <p class="headerblog">¿CLASIFICATORIAS?</p>
                    <ul>
                        <li>Clasificatorias</li>
                        <li>Amistoso</li>
                    </ul>
                </div>
                <div id="videowidget">
                    <div>
                        <iframe width="320" height="320" src="https://www.youtube.com/embed/gOo2t0BSGQE"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <p class="limpiar"></p>
        <?php
        include("./php/pie.php");
        ?>
    </div>
</body>

</html>