<?php
include("conexion.php");
$sql = $conexion->query("SELECT * FROM libros join categorias on libros.id_categoria=categorias.id_categoria") or die($conexion->error);
$sql1 = $conexion->query("SELECT * FROM categorias") or die($conexion->error);
if (isset($_POST['insertarLibro'])) {
    $titulo = $_POST['libroTitulo'];
    $autor = $_POST['libroAutor'];
    $categoria = $_POST['libroCategoria'];
    $precio = $_POST['libroPrecio'];
    $sql2 = $conexion->query("INSERT INTO libros (titulo,autor,id_categoria,precio) VALUES ('$titulo','$autor',$categoria,$precio)") or die($conexion->error);
    header("location:libros.php");
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
        TITULO: <input type="text" name="libroTitulo">
        AUTOR: <input type="text" name="libroAutor">
        CATEGORIA: <select name="libroCategoria">
            <?php
            while ($cats = $sql1->fetch_array()) {
                ?>
                <option value="
                <?php
                echo $cats[0];
                ?>
                "> <?php echo $cats[1]; ?> </option>
                <?php
            }
            ?>
        </select>
        PRECIO: <input type="number" step="0.5" min="0" name="libroPrecio">
        <input type="submit" value="Insertar" name="insertarLibro">
    </form>
    <br />
    <table border="1">
        <tr>
            <td>ID</td>
            <td>TITULO</td>
            <td>AUTOR</td>
            <td>CATEGORIA</td>
            <td>PRECIO</td>
            <td>IMAGEN</td>
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
                <td>
                    <?php echo $fila[2]; ?>
                </td>
                <td>
                    <?php echo $fila[6]; ?>
                </td>
                <td>
                    <?php echo $fila[4]; ?>
                </td>
                <td>
                    <img src="./img/<?php echo $fila[5]; ?>" alt="">
                </td>
                <td>EDITAR</td>
                <td>ELIMINAR</td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>