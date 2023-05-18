<?php
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    echo "$nombre<br />";

    $apellidos = $_POST['apellidos'];
    echo "$apellidos<br />";

    $edad = $_POST['edad'];
    echo "$edad<br />";

    $color = $_POST['color'];
    echo "$color<br />";

    $sexo = $_POST['sexo'];
    echo "$sexo<br />";

    $casado = $_POST['casado'];
    echo "$casado<br />";

    $date = $_POST['date'];
    echo "$date<br />";

    $aficiones = $_POST['aficiones'];
    foreach ($aficiones as $get_aficion) {
        echo $get_aficion . " - ";
    }
?>
    <br />
    <a href="./formulario.php">Clicá para volver al form</a>

<?php
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            table {
                margin: 0px auto;
                width: 800px;
            }

            td {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <form method="post" action="salidaForm.php">
            <!-- <?php echo $_SERVER['PHP_SELF']; ?> -->
            <table border="1px">
                <tr>
                    <td colspan="3">Titulo del formulario</td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td>Apellidos</td>
                    <td>Edad</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nombre">
                    </td>
                    <td>
                        <input type="text" name="apellidos">
                    </td>
                    <td>
                        <select id="edad" name="edad">
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Color</td>
                    <td>Sexo</td>
                    <td>Estado Civil</td>
                </tr>
                <tr>
                    <td>
                        <input type="color" name="color" id="color">
                    </td>
                    <td>
                        <input type="radio" name="sexo" id="hombre" value="hombre">
                        <label for="hombre">hombre</label>
                        <input type="radio" name="sexo" id="mujer" value="hombre">
                        <label for="mujer">mujer</label>
                    </td>
                    <td>
                        <input type="radio" name="casado" id="casado" value="casado">
                        <label for="casado">casado</label>
                        <input type="radio" name="casado" id="soltero" value="soltero">
                        <label for="soltero">soltero</label>
                        <input type="radio" name="casado" id="Otro" value="Otro">
                        <label for="Otro">Otro</label>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">Aficiones</td>
                    <td colspan="2">
                        <input type="checkbox" name="aficiones[]" value="cine">
                        <label for="cine">Cine</label>
                        <input type="checkbox" name="aficiones[]" value="literatura">
                        <label for="literatura">Literatura</label>
                        <input type="checkbox" name="aficiones[]" value="tebeos">
                        <label for="tebeos">Tebeos</label>
                    </td>

                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="aficiones[]" value="deporte">
                        <label for="deporte">Deporte</label>
                        <input type="checkbox" name="aficiones[]" value="musica">
                        <label for="musica">Música</label>
                        <input type="checkbox" name="aficiones[]" value="television">
                        <label for="television">Television</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        Fechad de Nacimiento
                        <input type="date" name="date" id="date">
                    </td>
                    <td>
                        <input type="submit" name="enviar">
                        <input type="reset" name="Restablecer">
                    </td>
                </tr>
            </table>
        </form>
        <a href="./index.php">Volver atrás</a>
    </body>

    </html>

<?php
}
?>