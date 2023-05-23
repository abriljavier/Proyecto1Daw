<?php
include("./php/conexion.php");
$sql = $conexion->query("Select partida.id, partida.fecha, partida.esCompeticion, juego.nombre, s1.nombre, s2.nombre, partida.img from partida join juego on partida.juegoID=juego.ID join socio s1 on partida.socio1ID=s1.ID join socio s2 on partida.socio2ID=s2.ID ORDER BY partida.fecha DESC LIMIT 4");
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
                    ?>
                    <div class="entrada">
                        <div class="entradaimg">
                            <img src="./img/imgpartidas/<?php echo $entrada[6] ?>" alt="" width="250px" height="150px">
                        </div>
                        <div class="entradatexto">
                            <div>
                                <?php
                                echo $entrada[4];
                                ?> VS
                                <?php
                                echo $entrada[5];
                                ?> ,
                                <?php echo $entrada[1] ?>
                            </div>
                            <div> El día
                                <?php echo $entrada[1] ?> jugaron a
                                <?php
                                echo $entrada[3];
                                ?> nuestros compañeros
                                <?php
                                echo $entrada[4];
                                ?> y
                                <?php
                                echo $entrada[5];
                                ?>. Pásate y no te pierdas la siguiente.
                            </div>
                            <div class="cajainfo">
                                <div>
                                    <?php echo $entrada[1] ?>
                                </div>
                                <div>
                                    <?php if ($entrada[2] == 1) { ?>Clasificatorio
                                    <?php } else { ?>Amistoso
                                    <?php } ?>
                                </div>
                                <div>
                                    <?php
                                    $entrada[3];
                                    ?>
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