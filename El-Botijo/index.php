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
    <div id="mainpage">
        <div id="header">
            <div>
                <div>
                    <img src="./img/LogoEru.png" alt="El logo de la empresa" height="100px" width="100px">
                </div>
                <div>
                    <a href="">
                        <div class="menu1">HOME</div>
                    </a>
                    <a href="">
                        <div class="menu1">BLOG</div>
                    </a>
                    <a href="">
                        <div class="menu1">GALLERY</div>
                    </a>
                    <a href="">
                        <div class="menu1">SHOP</div>
                    </a>
                    <a href="">
                        <div class="menu1">CONTACT</div>
                    </a>
                    <a href="">
                        <div class="menu1">ABOUT ME</div>
                    </a>
                </div>
            </div>
        </div>
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
                            <a href="www.google.com"></a>
                        </div>
                        <div class="acceder">
                            <a href=""></a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <p class="limpiar"></p>
        </div>
        <div id="footer">
            <div class="centra-cubos-pie">
                <div class="cubos-pie" id="cuboredes">
                    <img src="./img/LogoEru.png" alt="El logo de la empresa" height="80px" width="80px">
                    <br /><br />
                    <p> 950 Reservoir Ave, Cranston, Rhode Island, 02910, United States</p>
                    <br />
                    <div class="rrss">
                        <div id="twitter">
                            <a href="https://twitter.com/?lang=en"></a>
                        </div>
                        <div id="instagram">
                            <a href="https://www.instagram.com"></a>
                        </div>
                        <div id="tiktok">
                            <a href="https://www.tiktok.com"></a>
                        </div>
                        <div id="linkedin">
                            <a href="https://es.linkedin.com"></a>
                        </div>
                    </div>
                </div>
                <div class="cubos-pie"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.0947257951807!2d-71.45161008955664!3d41.77375200989987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e44f1928fe5947%3A0x901c4fe1bc96626e!2sOlneyville%20New%20York%20System!5e0!3m2!1ses!2ses!4v1683891153242!5m2!1ses!2ses"
                        width="250" height="230" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                <div class="cubos-pie">ultimos posts</div>
                <div class="cubos-pie"><iframe width="250" height="230" src="https://www.youtube.com/embed/X2vKGvp93OI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="centra-tiras-pie">
                <div id="copyright">COPYRIGHT 2023 Leonard Peikoff ALL RIGHTS RESERVED</div>
                <div id="menufinal">
                    <div class="menuF"><a href="">HOME</a></div>
                    <div class="menuF"><a href="">BLOG</a></div>
                    <div class="menuF"><a href="">GALLERY</a></div>
                    <div class="menuF"><a href="">SHOP</a></div>
                    <div class="menuF"><a href="">CONTACT</a></div>
                    <div class="menuF"><a href="">ABOUT ME</a></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>