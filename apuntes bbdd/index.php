<?php
include("conexion.php");
$sql = $conexion->query("Select * from categorias");

if (isset($_GET['id_categoria'])) {
    $seleccionada = $_GET['id_categoria'];
    $sql_libros = $conexion->query("select * from libros where id_categoria =$seleccionada") or die($conexion->error);
} else {
    $sql_libros = $conexion->query("SELECT * FROM libros") or die($conexion->error);
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
        div.contenedor {
            margin: 0px auto;
            background-color: grey;
            width: 700px;
        }

        div.contenedor a {
            display: block;
            margin: 30px;
        }
    </style>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <ul>
        <?php
        while ($fila = $sql->fetch_array()) {
            ?>

            <li>
                <a href="index.php?id_categoria=<?php echo $fila[0]; ?>"><?php echo $fila[1]; ?></a>

            </li>

            <?php
        }
        ?>
        <li>
            <a href="index.php">Todos los libros</a>
            <br /> <br />
        </li>
        <?php
        while ($fila1 = &$sql_libros->fetch_array()) {
            ?>
            <li>
                <?php echo $fila1[1]; ?>
            </li>
            <li>
                <img src="./img/<?php $fila1[5]; ?>" alt="Portada">
            </li>
            <?php
        }
        ?>
    </ul>
</body>

</html>