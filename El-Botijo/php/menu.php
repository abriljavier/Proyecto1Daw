<div id="header">
    <div>
        <div>
            <img src="./img/LogoEru.png" alt="El logo de la empresa" height="100px" width="100px">
        </div>
        <div>
            <a href="../index.php">
                <div class="menu1">INICIO</div>
            </a>
            <a href="../index.php">
                <div class="menu1">JUEGOS
                    <div class="menudesplegable">
                        <?php
                        $cathead = $conexion->query("SELECT * FROM categoria");
                        while ($cat = $cathead->fetch_array()) { ?>
                            <a href="../categorias.php?categorias&cat_id=<?php echo $cat[0] ?>">
                                <div>
                                    <?php echo $cat[1] ?>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </a>
            <a href="../blog.php">
                <div class="menu1">PARTIDAS</div>
            </a>
            <a href="../socios.php">
                <div class="menu1">SOCIOS
                </div>
            </a>
            <a href="../contacto.php">
                <div class="menu1">CONTACTO</div>
            </a>
        </div>
        <div>
            <form action="http://abriljavier.com.es:8080/abriljavier/El-Botijo/webapp/index.jsp" method="post">
                <p>Usuario
                    <input type="text" name="usuario" id="">
                </p>
                <p>Password
                    <input type="password" name="contra">
                </p>
                <p>
                    <input type="submit" value="entrar" class="enviar">
                </p>
            </form>
        </div>
    </div>
</div>