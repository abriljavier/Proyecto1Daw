<?php
include("./php/conexion.php");
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
    <link rel="stylesheet" href="./css/contacto.css">
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
        <div id="contactocontenido">
            <div>
                <p>QUIENES SOMOS</p>
                <P>&nbsp;&nbsp;&nbsp;&nbsp;Somos una asociación de juegos de mesa y rol de Cheste, Valencia. Nos
                    reunimos varios dias a la
                    semana, jugamos partidas a nuestros juegos favoritos, como Catán o Arkham, pintamos miniaturas
                    de
                    Warhammer 40k y roleamos de lo lindo con D&D y pathfinder! Contacta con nosotros y estaremos
                    encantados de contarte más de nuestro proyecto. </p>
                <p>CONTACTA CON NOSOTROS</p>
                <div>
                    <form action="mailto:abrilgranelljavier@gmail.com" method="post">
                        <div class="campo">
                            <div class="icon">
                                <img src="./img/user-icon.png" alt="">
                            </div>
                            <input type="text" name="name" id="" placeholder="Introduce tu nombre aqui">
                        </div>
                        <div class="campo">
                            <div class="icon">
                                <img src="./img/mailicon.png" alt="">
                            </div>
                            <input type="text" name="name" id="" placeholder="Tu dirección de correo">
                        </div>
                        <div class="campo">
                            <div class="icon">
                                <img src="./img/world-globe.png" alt="">
                            </div>
                            <input type="text" name="name" id="" placeholder="El asunto del contacto">
                        </div>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Escribenos algo :)"></textarea>
                        <input type="submit" value="Enviar" class="enviarcontacto">
                    </form>
                </div>
            </div>
            <div>
                <div class="bannerderecho">
                    <div>
                        <p>DONDE ESTAMOS</p>
                        <p>Asociación de Rol "El Botijo de Eru"</p>
                        <p>Calle Falsa, 123</p>
                        <p>Cheste, 46380, Valencia</p>
                        <p>Teléfono: 666 666 666</p>
                        <br /><br />
                        <p>El Botijo de Eru</p>
                        <p>contacto@elbotijodeeru.com</p>
                    </div>
                    <div>
                        <p>LOCALÍZANOS</p>
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51591.40001636459!2d72.94877109782647!3d19.132674733861933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7f189efc039%3A0x68fdcea4c5c5894e!2sIndian%20Institute%20of%20Technology%20Bombay!5e0!3m2!1ses!2ses!4v1684341808913!5m2!1ses!2ses"
                                width="240" height="401.6" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("./php/pie.php");
        ?>
    </div>
    <p class="limpiar"></p>

</body>

</html>