<?php
if (isset($_POST['enviar'])) {
    $formulario = $_POST["formulario"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div#contenedor {
            border: 1px solid black;
            margin: 0px auto;
        }
    </style>
</head>

<body>
    <form method="post" action="./form.php">
        <input type="radio" name="formulario" value="form1">
        <label for="form1">Formulario 1</label>
        <input type="radio" name="formulario" value="form2">
        <label for="form2">Formulario 2</label>
        <input type="radio" name="formulario" value="form3">
        <label for="form3">Formulario 3</label>
        <input type="submit" value="enviar">
        Elige el color: <input type="color" name="color">
    </form>

</body>

</html>