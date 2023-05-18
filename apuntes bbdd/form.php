<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body bgcolor="<?php echo $_POST['color']; ?>">
    <h1>Formularios</h1>
    <?php
    if (($_POST['formulario']) == "form1") {
    ?>
        <form method="post" action="">
            <h1>Formulario 1</h1>
            <input type="text" name="texto">
            <label for="texto">texto</label>
            <input type="password" name="pass">
            <label for="pass">password</label>
            <input type="submit" value="enviar">
        </form>

    <?php
    } elseif (($_POST['formulario']) == "form2") {
    ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1>Formulario 2</h1>
            <input type="radio" name="hola" value="hola">
            <label for="hola">Hola</label>
            <input type="radio" name="hola" value="adios">
            <label for="hola">Adios</label>
            <input type="text" name="campo">
            <input type="submit" value="enviar">
        </form>
    <?php
    } else {
    ?>
        <h1>Formulario 3</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <select name="lenguaje">
                <option value="JS">javascript</option>
                <option value="php">php</option>
                <option value="python">python</option>
            </select>
            <input type="checkbox" name="chkbx[]" value="a">
            <label for="a">A</label>
            <input type="checkbox" name="chkbx[]" value="b">
            <label for="b">B</label>
            <input type="checkbox" name="chkbx[]" value="c">
            <label for="c">C</label>
            <input type="checkbox" name="chkbx[]" value="d">
            <label for="d">D</label>
            <input type="submit" value="enviar">
        </form>
    <?php
    }
    ?>
    <a href="./index.php">Volver al índice</a>
</body>

</html>