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
        <div class="cubos-pie">
            <div class="contenedorpodio">
                <?php $puntos = $conexion->query("Select nombre, puntuacion from socio order by puntuacion desc LIMIT 3;");
                while ($fila = $puntos->fetch_assoc()) {
                    $nombre = $fila['nombre'];
                    $puntuacion = $fila['puntuacion'];
                    $nombres[] = $nombre;
                    $puntuaciones[] = $puntuacion;
                }
                ?>
                <img src="../img/trophy.gif" alt="Una copa">
                <div class="oro">
                    <?php echo $nombres[0] ?> -
                    <?php echo $puntuaciones[0] ?> puntos
                </div>
                <div class="plata">
                    <?php echo $nombres[1] ?> -
                    <?php echo $puntuaciones[1] ?> puntos
                </div>
                <div class="bronce">
                    <?php echo $nombres[2] ?> -
                    <?php echo $puntuaciones[2] ?> puntos
                </div>
                <p class="limpiar"></p>
                <p id="copas">NUESTROS CAMPEONES</p>
            </div>
        </div>
        <div class="cubos-pie"><iframe width="250" height="230" src="https://www.youtube.com/embed/X2vKGvp93OI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
    <div class="centra-tiras-pie">
        <div id="copyright">COPYRIGHT 2023 Leonard Peikoff ALL RIGHTS RESERVED</div>
        <div id="menufinal">
            <div class="menuF"><a href="./contacto.php">CONTACTO</a></div>
            <div class="menuF"><a href="https://www.goblintrader.es/es/">TIENDAS</a></div>
            <div class="menuF"><a href="./blog.php">PARTIDAS</a></div>
            <div class="menuF"><a href="./index.php">CATEGORIAS
                </a></div>
            <div class="menuF"><a href="./index.php">HOME</a></div>
        </div>
    </div>
</div>