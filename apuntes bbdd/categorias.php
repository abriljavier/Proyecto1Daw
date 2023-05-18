<?php
include("conexion.php");
$sql = $conexion->query("SELECT * FROM categorias") or die($conexion->error);
if (isset($_POST['insertarCategoria'])) {
    $categoria = $_POST['categoria'];
    $sql2 = $conexion->query("INSERT INTO categorias (categoria) VALUES ('$categoria')") or die($conexion->error);
    header("location:categorias.php");
}

if (isset($_GET['eliminar'])) {
    $seleccionada = $_GET['id_categoria'];
    echo $seleccionada;
    $queryBorrar = $conexion->query("DELETE FROM categorias WHERE id_categoria=('$seleccionada')") or die($conexion->error);
    header("location:categorias.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br />
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Categoria: <input type="text" name="categoria">
        <input type="submit" value="Insertar" name="insertarCategoria">
    </form>
    <br />
    <table border="1">
        <tr>
            <td>ID</td>
            <td>CATEGORIA</td>
            <td>EDITAR</td>
            <td>ELIMINAR</td>
        </tr>
        <?php
        while ($fila = $sql->fetch_array()) {
            ?>
            <tr>
                <td>
                    <?php echo $fila[0]; ?>
                </td>
                <td>
                    <?php echo $fila[1]; ?>
                </td>
                <td><a href="categorias.php?editar&id_categoria=<?php echo $fila[0]; ?>">EDITAR</a></td>
                <td><a href="categorias.php?eliminar&id_categoria=<?php echo $fila[0]; ?>">ELIMINAR</a></td>

            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>