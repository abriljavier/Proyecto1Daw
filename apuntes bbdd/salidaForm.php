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
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br />
    <a href="./formulario.php">Clicá para volver al form</a>
</body>

</html>